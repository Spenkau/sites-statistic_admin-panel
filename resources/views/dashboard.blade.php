<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('Админ-панель') }}
        </h2>

    </x-slot>

    <div class="container">
        <h1>Что можете сделать:</h1>

        <div class="container">
            <form method="post" action="{{ route('admin.check-site') }}" class="btn btn-danger">
                @csrf
                @method("POST")
                <button type="submit">Запустить проверку сайтов</button>
            </form>
            <a href="{{ route('admin.check-api') }}" class="btn btn-danger">Запустить проверку API</a>
            <a href="{{ route('api-point.index') }}" class="btn btn-primary">Статистика API</a>
            <a href="{{ route('user.index') }}" class="btn btn-primary">Управление пользователями</a>
            <a href="{{ route('service.index') }}" class="btn btn-primary">API Preprod config</a>
{{--            <a href="{{ route('admin.service', ['config-type' => 'processing']) }}" class="btn btn-primary">API Processing config</a>--}}
        </div>
    </div>
</x-app-layout>
