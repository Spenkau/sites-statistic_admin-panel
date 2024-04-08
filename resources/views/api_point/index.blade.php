@php
    function recursion($arr, $nesting = 0) {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                echo '<p>' . str_repeat('&nbsp;', $nesting) . $key . ':' .  '</p>' .'<br>';
                recursion($value, $nesting + 1);
            } else {
                echo '<p style="margin: 0">' . str_repeat('&nbsp;', $nesting) . '[' . $key . ' => ' . $value . ']' . '</p>' . '<br>';
            }
        }
    }

@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-white">
            {{ __('Все проверки API поинтов') }}
        </h2>
    </x-slot>
    <h1>API POINTS</h1>

    <x-filter-form :fields="[
            ['name' => 'name', 'label' => 'Название API', 'type' => 'text'],
            ['name' => 'url', 'label' => 'URL эндпоинта', 'type' => 'text'],
            ['name' => 'request_data', 'label' => 'Request-параметры', 'type' => 'text'],
            ['name' => 'response_data', 'label' => 'Response-параметры', 'type' => 'text'],
            ['name' => 'service', 'label' => 'Название сервиса', 'type' => 'text'],
            ['name' => 'created_at', 'label' => 'Дата проверки', 'type' => 'datetime-local'],
        ]">
    </x-filter-form>
    @if(!empty($apiPoints) && count($apiPoints) > 0 )

        <div class="container m-5">
            @foreach($apiPoints as $apiPoint)
                <x-cards.api-point-card :apiPoint="$apiPoint"></x-cards.api-point-card>
            @endforeach
        </div>
    @else
        <h1 class="text-center mt-5">Ничего не найдено!</h1>
    @endif
    <div class="mx-5">
        {{ $apiPoints->links() }}
    </div>

    @section('script')
        <script>
            document.querySelectorAll('.json-toggle').forEach(function (button) {
                button.addEventListener('click', function () {
                    const block = this.previousElementSibling;
                    if (block.style.maxHeight === '300px') {
                        block.style.maxHeight = 'none';
                        this.textContent = 'Свернуть';
                    } else {
                        block.style.maxHeight = '300px';
                        this.textContent = 'Развернуть';
                    }
                });
            });
        </script>
    @endsection
</x-app-layout>
