<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Все пользователи') }}
        </h2>
    </x-slot>
    <h1>{{ $user->name }}</h1>
    <h1>{{ $user->email }}</h1>

    <form action="{{ route('user.update-role', $user->id) }}"></form>
    <select name="" id="editRole">
        <option disabled>Выбрать роль</option>

        <option value="{{ \App\Enums\RolesEnum::USER }}">Пользователь</option>
        <option value="{{ \App\Enums\RolesEnum::ADMIN }}">Админ</option>
    </select>

    @foreach($user->personalSites as $number => $site)
        <p>{{ $number + 1 }} {{ $site->name }}</p>
    @endforeach
</x-app-layout>
