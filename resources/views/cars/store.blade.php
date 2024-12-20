<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать машину') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('cars.store') }}">
                        @csrf
                        <div class="form_wrapper">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="text" name="name" placeholder="Имя" required>
                            <input type="text" name="make" placeholder="Марка" required>
                            <input type="text" name="model" placeholder="Модель" required>
    
                            <button class="btn" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
