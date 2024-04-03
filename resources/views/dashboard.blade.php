<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('Ваши сайты') }}
        </h2>
        <div id="checkup_section">
            <button
                class="checkup btn btn-danger"
                data-route="site"
                href="{{ route('check.site') }}">
                Запустить проверку сайтов
                <span></span>
            </button>
            <button
                class="checkup btn btn-danger"
                data-route="api"
                href="{{ route('check.api') }}">
                Запустить проверку API
                <span></span>
            </button>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('site.party') }}" class="btn btn-primary">
                Совместные сайты
            </a>
            <a href="{{ route('site.archived') }}" class="btn btn-primary">Сайты в архиве</a>
            <a href="{{ route('site.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
    </x-slot>

    @if(!empty($sites) && count($sites) > 0)
        <x-filter-form :fields="[
            ['name' => 'name', 'label' => 'Название сайта', 'type' => 'text'],
            ['name' => 'url', 'label' => 'URL сайта', 'type' => 'text'],
            ['name' => 'comment', 'label' => 'Комментарий', 'type' => 'text'],
            ['name' => 'created_at', 'label' => 'Дата создания', 'type' => 'datetime-local'],
        ]">
        </x-filter-form>

        <ul class="list-unstyled m-5" id="sites-list">
            @foreach($sites as $site)
                <x-cards.site-card :site="$site"></x-cards.site-card>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $sites->appends(request()->query())->links() }}
            </div>
        </ul>
    @else
        <h1 class="text-center">По вашему запросу ничего не найдено</h1>
    @endif
    @section('script')
        <script>
            const COOLDOWN_SECONDS = 10;

            const sitesList = document.getElementById('sites-list');
            const deleteBtn = document.querySelector('.delete-btn');
            const checkBtns = document.querySelectorAll('.checkup');
            const checkupBlock = document.getElementById('checkup_section');

            sitesList.addEventListener('click', (event) => {
                if (event.target.classList.contains('delete-btn')) {
                    const siteId = event.target.getAttribute('data-id');

                    axios.delete(`/site/${siteId}`)
                        .then(() => alert('Сайт перенесен в архив. Обновите страницу'));
                }
            })

            checkupBlock.addEventListener('click', (event) => {
                if (event.target.classList.contains('checkup')) {
                    const button = event.target;
                    const route = event.target.getAttribute('data-route')
                    checkup(button, route);
                }
            })

            function checkup(button, route) {
                button.disabled = true;
                const countdownElement = button.firstElementChild;
                showCountdown(countdownElement);

                axios.post(`check/${route}`, {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                    .then(res => res.json())
                    .then((data) => alert(data.message))

                setTimeout(() => {
                    button.disabled = false;
                }, COOLDOWN_SECONDS * 1000)
            }

            function showCountdown(cooldownElement) {
                let cooldown = COOLDOWN_SECONDS;

                const intervalId = setInterval(() => {
                    cooldown--;

                    if (cooldown > 0) {
                        cooldownElement.innerText = `(${cooldown})`;
                    } else {
                        cooldownElement.innerText = '';
                        clearInterval(intervalId);
                    }

                }, 1000);
            }
        </script>
    @endsection
</x-app-layout>
