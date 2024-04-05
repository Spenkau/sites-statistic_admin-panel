@props(['apiPoint'])

@php
    $requestData = json_decode($apiPoint->request_data, true);
    $responseData = json_decode($apiPoint->response_data, true);
@endphp

<div class="card mb-3">
    <div class="card-header">
        <h4 class="mb-0">Проверка №{{ $apiPoint->id }}</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header"><strong>Подробности API</strong></div>
                    <div class="card-body">
                        <p><a href="{{ route('api-point.show', ['id' => $apiPoint->id]) }}"
                              class="text-decoration-none">{{ $apiPoint->name }}</a></p>
                        <p>URL: {{ $apiPoint->url }}</p>
                        <p>Сервис: {{ $apiPoint->service }}</p>
                        <p>Дата проверки: {{ $apiPoint->created_at }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @if(!empty($apiPoint->apiHistories))
                    <div class="card">
                        <div class="card-header"><strong>История API</strong></div>
                        <ul class="list-group list-group-flush">
                            @foreach($apiPoint->apiHistories as $apiPointHistory)
                                <li class="list-group-item">
                                    <p>ID: {{ $apiPointHistory->id }}</p>
                                    <p>Статус-код: {{ $apiPointHistory->status_code }}</p>
                                    <p>Время отклика: {{ $apiPointHistory->response_time }}</p>
                                    <p>Дата проверки: {{ $apiPointHistory->created_at }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p><strong>Request data:</strong></p>
                <div class="json-block" style="max-height: 300px; overflow-y: auto">
<pre class="bg-light p-2 rounded">
<code>
@json($requestData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
</code>
</pre>
                </div>
                <button class="btn btn-link json-toggle">Развернуть</button>
            </div>
            <div class="col-12 mt-3">
                <p><strong>Response data:</strong></p>
                <div class="json-block" style="max-height: 300px; overflow-y: auto">
<pre class="bg-light p-2 rounded">
<code>
@json($responseData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
</code>
</pre>
                </div>
                <button class="btn btn-link json-toggle">Развернуть</button>
            </div>
        </div>
    </div>
</div>
