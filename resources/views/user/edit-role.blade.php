<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Все пользователи') }}
        </h2>
    </x-slot>
    <div class="container card w-50">
        <div class="card-body d-flex justify-content-between">
            <p>Пользователь {{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>

        @if ($user->id == Auth::id() && $user->roles[0]->id == 2)
            <div class="p-3 text-center">Вы, как администратор, не можете поменять свою роль!</div>
        @else
            <form method="post" action="{{ route('user.update-role', $user->id) }}">
                @csrf
                @method("PUT")

                <select name="role" id="select-role">
                    <option
                        value="{{ \App\Enums\RolesEnum::from($user->roles[0]->id) }}">{{ \App\Enums\RolesEnum::fromInt($user->roles[0]->id) }}</option>
                    @foreach(\App\Enums\RolesEnum::cases() as $roleEnum)
                        @if(strtolower($roleEnum->name) != $user->roles[0]->name)
                            <option value="{{ $roleEnum->value }}">{{ $roleEnum->name }}</option>
                        @endif
                    @endforeach
                </select>

                <button type="submit">Изменить</button>
            </form>
        @endif
    </div>

</x-app-layout>
