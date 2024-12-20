<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="requests_container_req">
                        @foreach($requests as $item)
                            <div class="requests_wrapper_req">
                                <div class="">Ник: {{$item->car->name}}</div>
                                <div class="">Модель: {{$item->car->model}}</div>
                                <div class="">Марка: {{$item->car->make}}</div>
                                <div class="">Проблема: {{$item->problem}}</div>
                                @if($item->repair_data==null)
                                    Дата выполнения: на расмотрении
                                @else
                                    {{$item->repair_data}}
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
