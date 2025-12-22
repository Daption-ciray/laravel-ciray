<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Egzersizler') }}</h2>
            <a href="{{ route('exercises.create') }}"
                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 transition">+
                Yeni Egzersiz</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}</div>@endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ad</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tür</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Birim</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kalori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">İşlemler
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($exercises as $exercise)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $exercise->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $exercise->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $exercise->type }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $exercise->unit }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $exercise->calori }}</td>
                                    <td class="px-6 py-4 text-sm font-medium">
                                        <a href="{{ route('exercises.edit', $exercise) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-3">Düzenle</a>
                                        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST"
                                            class="inline">@csrf @method('DELETE')<button type="submit"
                                                class="text-red-600 hover:text-red-900"
                                                onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">Henüz egzersiz
                                        bulunmamaktadır.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>