<x-html-layout>
    <div class="min-vh-100">
        @include('layouts.navigation')

        @if (isset($header))
            <header class="dark-bg-gray">
                <x-nav-link href="{{ url()->previous() }}" style="position: absolute; top: 15px; left: 10px">
                    {{ __('Обратно') }}
                </x-nav-link>
                <div class="d-flex justify-content-between align-items-center py-3 px-5">
                    {{ $header }}
                </div>
            </header>
        @endif

        <main class="px-4 py-5">
            {{ $slot }}
        </main>
    </div>
    @yield('script')
    @yield('addon-script')
</x-html-layout>
