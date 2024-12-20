<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Панель администратора') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.updata',$request->id)}}">
                        @csrf
                        @method("patch")
                        <div class="form_wrapper">
                            <input type="hidden" name="car_id" value="{{$request->car_id}}">
                            <input type="hidden" name="user_id" value="{{$request->user_id}}">
                            <input type="hidden" name="problem" value="{{$request->problem}}">
                            <input type="date" name="repair_data" required>
                            <button class="btn" type="submit">Отправить</button>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
