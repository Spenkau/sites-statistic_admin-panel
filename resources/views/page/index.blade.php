<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-white m-0">
            {{ __('Сайт') }} <span>{{ $site->name }}</span>
        </h2>
        <div>
            <a href="{{ route('site.add-user', ['site' => $site->id]) }}"
               class="text-xl text-gray-800 dark:text-gray-200 border-gray-100 mx-4">Добавить коллегу</a>
            <a href="{{ route('site.page.create', ['site' => $site->id]) }}"
               class="text-xl text-gray-800 dark:text-gray-200 border-gray-100">Создать страницу</a>
        </div>
    </x-slot>
    <details class="user-select-none">
        <summary>
            Детали сайта
        </summary>
        <ul class="list-group mb-4">
            <li>Адрес: <a href="{{ $site->url }}" class="link-dark">{{ $site->url }}</a></li>
            <li>Дата создания: {{ $site->created_at }}</li>
            <li>Комментарий: {{ $site->comment }}</li>
        </ul>
    </details>

    <hr>

    <details class="user-select-none">
        <summary>
            Нотификации сайта
        </summary>
        <form method="post" id="notifications-form" action="{{ route('site.update-used-channels', $site->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-check">
                <x-input-label for="telegram_channel" class="form-check-label" :value="__('Телеграм канал')"/>
                <x-checkbox-input
                    id="telegram_channel"
                    name="telegram_channel"
                    autocomplete="telegram_channel"
                    :value="$notifications['telegram_channel']"
                />
                <x-input-error class="mt-2" :messages="$errors->get('telegram_channel')"/>
            </div>

            <div class="form-check">
                <x-input-label for="whatsapp_channel" class="form-check-label" :value="__('WhatsApp канал')"/>
                <x-checkbox-input
                    id="whatsapp_channel"
                    name="whatsapp_channel"
                    autocomplete="whatsapp_channel"
                    :value="$notifications['whatsapp_channel']"
                />
                <x-input-error class="mt-2" :messages="$errors->get('whatsapp_channel')"/>
            </div>

            <div class="form-check">
                <x-input-label for="sms_channel" class="form-check-label" :value="__('SMS канал')"/>
                <x-checkbox-input
                    id="sms_channel"
                    name="sms_channel"
                    autocomplete="sms_channel"
                    :value="$notifications['sms_channel']"
                />
                <x-input-error class="mt-2" :messages="$errors->get('sms_channel')"/>
            </div>

            <div class="form-check">
                <x-input-label for="email_channel" class="form-check-label" :value="__('Email канал')"/>
                <x-checkbox-input
                    id="email_channel"
                    name="email_channel"
                    autocomplete="email_channel"
                    :value="$notifications['email_channel']"
                />
                <x-input-error class="mt-2" :messages="$errors->get('email_channel')"/>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Применить</button>
        </form>

    </details>

    <hr>

    @if(isset($pages) && count($pages) > 0)
        <x-filter-form :fields="[
            ['name' => 'url', 'label' => 'URL страницы', 'type' => 'text'],
            ['name' => 'threshold_speed', 'label' => 'Пороговая скорость', 'type' => 'number'],
            ['name' => 'comment', 'label' => 'Комментарий', 'type' => 'text'],
            ['name' => 'created_at', 'label' => 'Дата создания', 'type' => 'datetime-local'],
        ]">
        </x-filter-form>

        <p>Страницы:</p>
        <ul class="list-group">
            @foreach($pages as $page)
                <x-cards.page-card :page="$page" :site="$site"></x-cards.page-card>
            @endforeach
        </ul>
    @else
        <div style="display:flex; justify-content: center; align-items: center; flex-direction: column">
            <h2>Вы еще не добавляли страниц</h2>
            <a href="{{ route('site.page.create', ['site' => $site]) }}">Добавить</a>
        </div>
    @endif

    @section('script')
        <script>
            const notificationsForm = document.getElementById('notifications-form');

            notificationsForm.addEventListener('submit', (event) => {
                console.log(event.submitter)
            })
        </script>
    @endsection
</x-app-layout>


