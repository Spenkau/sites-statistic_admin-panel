<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-white m-0">
            {{ __('Коллеги ваших сайтов') }}
        </h2>
    </x-slot>
    <ul id="site-collabs" class="list-group align-items-start flex-row">
        @foreach($siteCollabs as $siteWithUsers)
            <li class="list-group-item">
                <p>Сайт - {{ $siteWithUsers->name }}</p>

                <ul class="p-0">
                    @foreach($siteWithUsers->users as $user)
                        <li class="list-group-item d-flex align-items-center justify-content-between gap-3">
                            <p class="m-0">Участник: {{ $user->name }}</p>
                            <input type="hidden" data-user-id="{{ $user->id }}"
                                   data-site-id="{{ $siteWithUsers->id }}"/>
                            <button type="button" class="delete-collaborator-btn btn btn-danger">Удалить</button>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    @section('script')
        <script>
            const siteUserList = document.getElementById('site-collabs');

            siteUserList.addEventListener('click', (event) => {
                if (event.target.matches('.delete-collaborator-btn')) {
                    const btn = event.target;
                    const input = btn.previousElementSibling

                    const userId = input.getAttribute('data-user-id');
                    const siteId = input.getAttribute('data-site-id');

                    const confirmDelete = confirm('Вы уверены, что хотите удалить этого участника?');

                    if (confirmDelete) {
                        axios.delete('/site/remove-user', {
                            params: {
                                site_id: siteId,
                                user_id: userId
                            }
                        })
                            .then(() => alert('Пользователь удалён'))
                            .catch((e) => alert('Произошла ошибка: ' + e))
                    }
                }
            })
        </script>
    @endsection
</x-app-layout>


