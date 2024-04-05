<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Все пользователи') }}
        </h2>
    </x-slot>
    {{--    @dd($users)--}}
    <div id="users-list" class="container">
        @foreach($users as $user)
            <div class="card mb-3">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        Ник: {{ $user->name }} |
                        Email: {{ $user->email }} |
                        Роль: {{ $user->roles[0]->name }}
                    </div>
                    <div>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">Подробнее</a>
                        <a
                            href="{{ route('user.edit-role', $user->id) }}"
                            class="btn btn-secondary btn-sm">
                            Сменить роль
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
        {{ $users->links() }}
    </div>
</x-app-layout>
