@props(['value'])

<input
    type="checkbox"
    {{ $value ? 'checked' : '' }}
    {!! $attributes->merge(['class' => 'form-check-input mx-2']) !!}
>
