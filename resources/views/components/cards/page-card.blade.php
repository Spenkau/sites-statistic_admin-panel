@props(['page', 'site'])

<li class="list-group-item list-group-horizontal">
    <p>URL: {{ $page->url }}</p>
    <p>Порог: <code>{{ $page->threshold_speed }}</code> миллисекунд</p>
    <p>
        Комментарий:
        {{ strlen($page->comment) > 40 ? mb_substr($page->comment, 0, 40) . '...' : $page->comment}}
    </p>
    <p>Дата создания: {{ $page->created_at }}</p>
    <a class="link-dark" href="{{ route('site.page.show', ['site' => $site, 'page' => $page]) }}">
        Перейти к деталям
    </a>
</li>
