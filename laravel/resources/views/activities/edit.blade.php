<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Aktivite Düzenle') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('activities.update', $activity) }}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-4">
                            <label for="customer_id" class="block text-sm font-medium text-gray-700">Müşteri</label>
                            <select name="customer_id" id="customer_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                @foreach($customers as $customer)<option value="{{ $customer->id }}" {{ $activity->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}
                                {{ $customer->surname }}</option>@endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="exercise_id" class="block text-sm font-medium text-gray-700">Egzersiz</label>
                            <select name="exercise_id" id="exercise_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                @foreach($exercises as $exercise)<option value="{{ $exercise->id }}" {{ $activity->exercise_id == $exercise->id ? 'selected' : '' }}>{{ $exercise->name }}
                                </option>@endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="repetition" class="block text-sm font-medium text-gray-700">Tekrar
                                Sayısı</label>
                            <input type="number" name="repetition" id="repetition"
                                value="{{ old('repetition', $activity->repetition) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="calori" class="block text-sm font-medium text-gray-700">Kalori</label>
                            <input type="number" name="calori" id="calori"
                                value="{{ old('calori', $activity->calori) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="duration" class="block text-sm font-medium text-gray-700">Süre (dk)</label>
                            <input type="number" name="duration" id="duration"
                                value="{{ old('duration', $activity->duration) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="like" value="1" {{ $activity->like ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-600">Beğendi</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('activities.index') }}"
                                class="text-gray-600 hover:text-gray-900 mr-4">İptal</a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 transition">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>