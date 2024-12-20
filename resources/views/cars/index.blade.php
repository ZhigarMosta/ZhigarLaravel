<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Машины') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="requests_container_req">
                        @foreach($cars as $item)
                        <div class="requests_wrapper_req">
                            <div class="user_block">Пользователь: {{$item->user->name}} {{$item->user->surname}}</div>
                            <div class="">Ник: {{$item->name}}</div>
                            <div class="">Модель: {{$item->model}}</div>
                            <div class="">Марка: {{$item->make}}</div>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
