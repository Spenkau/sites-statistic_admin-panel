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
                </div>

                <h3>Сайты:</h3>
                <div class="container">
                    @foreach($user->personalSites as $number => $site)
                        <div class="card mb-3">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="px-3">
                                    <p>Название: {{ $site->name }}</p>
                                    <p>URL: <a href="{{ $site->url }}">{{ $site->url }}</a></p>
                                    <p>Комментарий: {{ $site->comment }}</p>
                                </div>
                                <div class="d-inline-flex">
                                    <a href="{{ route('site.show', $site->id) }}" class="btn btn-success rounded-0 btn-sm">Просмотреть</a>
                                    <a href="{{ route('site.edit', $site->id) }}" class="btn btn-primary rounded-0 btn-sm">Изменить</a>
                                    <a href="{{ route('site.delete', $site->id) }}" class="btn btn-danger rounded-0 btn-sm">Удалить</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm">Удалить</a>
            </div>
        </div>
    </div>

</x-app-layout>
