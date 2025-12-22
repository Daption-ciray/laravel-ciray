<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Yeni Öğün Ekle') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('meals.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="customer_id" class="block text-sm font-medium text-gray-700">Müşteri</label>
                            <select name="customer_id" id="customer_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                <option value="">Seçiniz</option>
                                @foreach($customers as $customer)<option value="{{ $customer->id }}">
                                {{ $customer->name }} {{ $customer->surname }}</option>@endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="food_id" class="block text-sm font-medium text-gray-700">Yiyecek</label>
                            <select name="food_id" id="food_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                <option value="">Seçiniz</option>
                                @foreach($foods as $food)<option value="{{ $food->id }}">{{ $food->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="mealtime" class="block text-sm font-medium text-gray-700">Öğün Zamanı</label>
                            <select name="mealtime" id="mealtime"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                <option value="">Seçiniz</option>
                                <option value="Kahvaltı">Kahvaltı</option>
                                <option value="Öğle Yemeği">Öğle Yemeği</option>
                                <option value="Akşam Yemeği">Akşam Yemeği</option>
                                <option value="Ara Öğün">Ara Öğün</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="like" value="1"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Beğendi</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('meals.index') }}"
                                class="text-gray-600 hover:text-gray-900 mr-4">İptal</a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-pink-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 transition">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>