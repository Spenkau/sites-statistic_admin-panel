@props(['site'])

<div class="card mb-3">
    <div class="card-body d-flex align-items-center justify-content-between">
        <div class="px-3">
            <p>Название: {{ $site->name }}</p>
            <p>URL: <a href="{{ $site->url }}">{{ $site->url }}</a></p>
            <p>Комментарий: {{ $site->comment }}</p>
        </div>
        <div class="d-inline-flex">
            <a href="{{ route('site.page.index', $site->id) }}" class="btn btn-success rounded-0 btn-sm">Просмотреть</a>
            <a href="{{ route('site.edit', $site->id) }}" class="btn btn-primary rounded-0 btn-sm">Изменить</a>
            <a href="{{ route('site.destroy', $site->id) }}" class="btn btn-danger rounded-0 btn-sm">Удалить</a>
        </div>
    </div>
</div>
