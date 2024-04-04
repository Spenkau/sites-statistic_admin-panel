<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('Админ-панель') }}
        </h2>

    </x-slot>

    <div class="container">
        <h1>Что можете сделать:</h1>

        <a href="{{ route('user.index') }}">Управление пользователями</a>
    </div>
</x-app-layout>
