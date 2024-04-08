<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('API config') }}
        </h2>
    </x-slot>
    <div class="container">
        @foreach($services as $service)
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h3>{{ $service->name }}</h3>
                        <p>API: {{ $service->api }}</p>
                        <p>Created at: {{ $service->created_at }}</p>
                    </div>
                    <div>
                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary mb-3">Обновить</a>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить сервис</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($service->serviceData as $data)
                        <h4>{{ $data->endpoint }}</h4>
                        <p>Метод: {{ $data->method }}</p>
                        <p>Параметры:</p>
                        <pre><code>@json($data->params, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)</code></pre>
                        <p>Успешный отклик:</p>
                        <pre><code>@json($data->success_response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)</code></pre>
                        <p>Отклик с ошибкой:</p>
                        <pre><code>@json($data->error_response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)</code></pre>
                        <div class="d-flex gap-3 my-3">
                            <a href="{{ route('serviceData.edit', ['serviceData' => $data]) }}" class="btn btn-primary">Изменить</a>
                            <form action="{{ route('serviceData.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="card-footer">

                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
