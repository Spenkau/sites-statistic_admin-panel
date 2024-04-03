@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'd-inline-flex align-items-center px-1 pt-1 border-bottom-2
                   border-indigo-400 border-dark text-sm text-white font-medium
                   leading-5 text-gray-900 text-dark focus-outline-none
                   focus-border-indigo-700 transition duration-150 ease-in-out'
                : 'd-inline-flex align-items-center px-1 pt-1 border-bottom
                   border-0 text-sm font-medium leading-5 text-gray-500
                   dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300
                   hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none
                   focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300
                   dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
