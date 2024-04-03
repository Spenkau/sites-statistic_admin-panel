<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Править активацию каналов уведомлений') }}
        </h2>
    </header>

    <form method="post" action="{{ route('user.update-used-channels') }}">
        @csrf
        @method('PUT')
        <div>
            <x-input-label for="telegram_channel" class="text-white" :value="__('Телеграм канал')"/>
            <x-text-input
                id="telegram_channel"
                name="telegram_channel"
                autocomplete="telegram_channel"
                type="checkbox"
            />
            <x-input-error class="mt-2" :messages="$errors->get('telegram_channel')"/>
        </div>

        <div>
            <x-input-label for="whatsapp_channel" :value="__('WhatsApp канал')"/>
            <x-text-input
                id="whatsapp_channel"
                name="whatsapp_channel"
                autocomplete="whatsapp_channel"
                type="checkbox"
            />
            <x-input-error class="mt-2" :messages="$errors->get('whatsapp_channel')"/>
        </div>

        <div>
            <x-input-label for="sms_channel" :value="__('SMS канал')"/>
            <x-text-input
                id="sms_channel"
                name="sms_channel"
                autocomplete="sms_channel"
                type="checkbox"
            />
            <x-input-error class="mt-2" :messages="$errors->get('sms_channel')"/>
        </div>

        <div class="d-flex">
            <x-input-label for="email_channel" :value="__('Email канал')"/>
            <x-text-input
                id="email_channel"
                name="email_channel"
                autocomplete="email_channel"
                type="checkbox"
            />
            <x-input-error class="mt-2" :messages="$errors->get('email_channel')"/>
        </div>

        <button type="submit">Применить</button>
    </form>
</section>
