<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Редактировать каналы уведомлений') }}
        </h2>
    </header>

        <form method="post" action="{{ route('profile.channels-update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label class="text-white" for="telegram_chat_id" :value="__('Telegram Chat ID (НЕДОСТУПНО)')"/>
                <x-text-input
                    id="telegram_chat_id"
                    name="telegram_chat_id"
                    type="text"
                    :value="old('telegram_chat_id', $user->telegram_chat_id)"
                    class="mt-1 block w-full"
                    disabled
                    autocomplete="telegram_chat_id"/>
                <x-input-error class="mt-2" :messages="$errors->get('telegram_chat_id')"/>
            </div>

            <div>
                <x-input-label class="text-white" for="whatsapp_chat_id" :value="__('Whatsapp Chat ID (НЕДОСТУПНО)')"/>
                <x-text-input
                    id="whatsapp_chat_id"
                    name="whatsapp_chat_id"
                    type="text"
                    class="mt-1 block w-full"
                    :value="old('whatsapp_chat_id', $user->whatsapp_chat_id)"
                    disabled
                    autocomplete="telegram_chat_id"/>
                <x-input-error class="mt-2" :messages="$errors->get('whatsapp_chat_id')"/>
            </div>

            <div>
                <x-input-label class="text-white" for="phone_number" :value="__('Номер телефона (РБ | РФ)')"/>

                <x-text-input
                    id="phone_number"
                    name="phone_number"
                    type="tel"
                    placeholder="+(375|7) (25|29|33|44|17|212|162) XXXXXXX"
                    class="mt-1 block w-full"
                    :value="old('phone_number', $user->phone_number)"
                    onkeyup="applyMask(this)"
                    autocomplete="phone_number"/>
                <x-input-error class="mt-2" :messages="$errors->get('phone_number')"/>

                <script>
                    function applyMask(input) {
                        const value = input.value.replace(/\D/g, '');
                        const mask = value.startsWith('375') ? '+375 (99) 999-99-99' : value.startsWith('7') ? '+7 (999) 999-99-99' : '999999999999999';
                        let maskedValue = '';
                        for (let i = 0, k = 0; i < mask.length; i++) {
                            maskedValue += mask[i] === '9' && k < value.length ? value[k++] : mask[i];
                        }
                        input.value = maskedValue;
                    }
                </script>
            </div>

            <div class="flex items-center gap-4">
                <button class="btn btn-dark">{{ __('Применить') }}</button>

                @if (session('status') === 'channels-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Сохранено.') }}</p>
                @endif
            </div>
        </form>



</section>
