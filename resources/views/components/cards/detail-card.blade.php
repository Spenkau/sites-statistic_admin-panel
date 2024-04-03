@props(['page', 'key', 'details'])

<div class="card mt-3">
    <div class="card-header">
        <p class="mb-0">Проверка №{{ $key + 1 }} от {{ $details->created_at }}</p>
    </div>
    <div class="card-body">
        <p>Статус-код: {{ $details->status_code }}</p>
        <p class="{{ $details->response_time < $page->threshold_speed ? 'text-danger' : 'text-success'}}">
            Время отклика: {{ $details->response_time }} секунд
        </p>
        @if(isset($details->error))
            <p>Ошибка:</p>
            <pre><code>{{ $details->error }}</code></pre>
        @endif
    </div>
</div>
