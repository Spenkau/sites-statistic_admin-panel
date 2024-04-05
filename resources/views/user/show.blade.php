<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Все пользователи') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="card-title">{{ $user->name }}</h1>
                <h2 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h2>

                <div class="mb-3">
                    <a href="{{ route('user.edit-role', $user->id) }}" class="btn btn-primary btn-sm">Сменить роль</a>
                    <button
                        class="delete-user btn btn-danger btn-sm"
                        x-data=""
                        x-user-id="{{ $user->id }}"
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-management')">
                        Удалить
                    </button>
                </div>

                <h3>Сайты: @if( count($sites) < 1)
                        нету
                    @endif</h3>
                <div class="mb-4">
                    <x-filter-form :fields="[
                        ['name' => 'name', 'label' => 'Название сайта', 'type' => 'text'],
                        ['name' => 'url', 'label' => 'URL сайта', 'type' => 'text'],
                        ['name' => 'comment', 'label' => 'Комментарий', 'type' => 'text'],
                        ['name' => 'created_at', 'label' => 'Дата создания', 'type' => 'datetime-local'],
                    ]">
                    </x-filter-form>
                </div>

                <div class="container">
                    @foreach($sites as $site)
                        <x-cards.site-card :site="$site"></x-cards.site-card>
                    @endforeach
                    {{ $sites->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modal name="confirm-user-management"  :show="$errors->userDeletion->isNotEmpty()" focusable>
        @if ($user->id == Auth::id())
            <h1 class="text-center p-3">Вы не можете удалить себя как администратора!</h1>
            <div class="mt-6 p-3 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Обратно') }}
                </x-secondary-button>
            </div>
        @else
            <form method="post" action="{{ route('user.delete', $user->id) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg text-dark font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Вы уверены что хотите удалить аккаунт?') }}
                </h2>

                <p class="mt-1 text-danger text-sm text-gray-600 dark:text-gray-400">
                    {{ __('После удаления учетной записи все ее ресурсы и данные будут удалены без
                            возможности восстановления. Вы, как администратор, отвечаете за свои действия.
                             Подтвердите, что хотите навсегда удалить данную учетную запись.') }}
                </p>


                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Отменить') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3">
                        {{ __('Удалить') }}
                    </x-danger-button>
                </div>
            </form>
        @endif
    </x-modal>

</x-app-layout>
