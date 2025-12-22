<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Yiyecek Düzenle') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('foods.update', $food) }}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Ad</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $food->name) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="major" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <input type="text" name="major" id="major" value="{{ old('major', $food->major) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="calori" class="block text-sm font-medium text-gray-700">Kalori</label>
                            <input type="number" name="calori" id="calori" value="{{ old('calori', $food->calori) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('foods.index') }}"
                                class="text-gray-600 hover:text-gray-900 mr-4">İptal</a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 transition">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>