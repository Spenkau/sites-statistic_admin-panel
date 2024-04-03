@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-medium text-sm-center']) }}>
        {{ $status }}
    </div>
@endif
