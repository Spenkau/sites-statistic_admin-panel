<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-white">
            {{ __('API config') }}
        </h2>
    </x-slot>
    <div class="container">
        <form method="POST" action="{{ route('service.update', $service) }}">
            @csrf
            @method('PUT')

            <div class="mt-4">
                <x-input-label for="name" :value="__('name')"/>
                <x-text-input id="name" class="block mt-1 w-full"
                              type="text"
                              name="name"
                              :value="old('name', $service->name)"
                              required/>

                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="api" :value="__('api')"/>
                <x-text-input id="api" class="block mt-1 w-full"
                              type="text"
                              name="api"
                              :value="old('api', $service->api)"
                              required/>

                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Изменить</button>
        </form>
    </div>
</x-app-layout>
