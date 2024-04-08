@php
    function decode($value) {
        return json_decode($value, true);
    }
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('API config') }}
        </h2>
    </x-slot>
    <div class="container">
        <form method="POST" action="{{ route('serviceData.update', $serviceData) }}">
            @csrf
            @method('PUT')

{{--            <input type="hidden" name="site_id" value="{{ $serviceId }}">--}}

            <div class="mt-4">
                <x-input-label for="endpoint" :value="__('endpoint')"/>
                <x-text-input id="endpoint" class="block mt-1 w-full"
                              type="text"
                              name="endpoint"
                              :value="old('name', $serviceData->endpoint)"
                              required/>

                <x-input-error :messages="$errors->get('endpoint')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="method" :value="__('method')"/>
                <x-text-input id="method" class="block mt-1 w-full"
                              type="text"
                              name="method"
                              :value="old('method', $serviceData->method)"
                              required/>

                <x-input-error :messages="$errors->get('method')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="params"/>
                <label for="params">params</label>
                <textarea id="params" class="block mt-1 w-full"
                          type="text"
                          name="params"
                          required>
                    @json(decode(old('params', $serviceData->params)), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
{{--                    {{ old('params', $serviceData->params) }}--}}
                </textarea>

                <x-input-error :messages="$errors->get('params')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="success_response"/>
                <label for="success_response">success_response</label>
                <textarea id="success_response" class="block mt-1 w-full"
                          type="text"
                          name="success_response"
                          required>
                    @json(decode(old('success_response', $serviceData->success_response)), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
                </textarea>

                <x-input-error :messages="$errors->get('success_response')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="error_response"/>
                <label for="error_response">error_response</label>
                <textarea id="error_response" class="block mt-1 w-full"
                          type="text"
                          name="error_response"
                          required>
                    @json(decode(old('error_response', $serviceData->error_response)), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
                </textarea>

                <x-input-error :messages="$errors->get('error_response')" class="mt-2"/>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Изменить</button>
        </form>
    </div>
</x-app-layout>
