<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Hoş Geldiniz! 👋</h3>
                    <p class="text-gray-600">Fitness Takip Sistemi yönetim paneline hoş geldiniz.</p>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-6">
                <!-- Customers Card -->
                <a href="{{ route('customers.index') }}"
                    class="bg-gradient-to-br from-blue-500 to-blue-600 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-blue-100 text-sm">Müşteriler</p>
                                <p class="text-3xl font-bold">{{ \App\Models\Customer::count() }}</p>
                            </div>
                            <div class="text-4xl opacity-80">👥</div>
                        </div>
                    </div>
                </a>

                <!-- Exercises Card -->
                <a href="{{ route('exercises.index') }}"
                    class="bg-gradient-to-br from-green-500 to-green-600 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-green-100 text-sm">Egzersizler</p>
                                <p class="text-3xl font-bold">{{ \App\Models\Exercise::count() }}</p>
                            </div>
                            <div class="text-4xl opacity-80">🏋️</div>
                        </div>
                    </div>
                </a>

                <!-- Food Card -->
                <a href="{{ route('foods.index') }}"
                    class="bg-gradient-to-br from-orange-500 to-orange-600 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-orange-100 text-sm">Yiyecekler</p>
                                <p class="text-3xl font-bold">{{ \App\Models\Food::count() }}</p>
                            </div>
                            <div class="text-4xl opacity-80">🍎</div>
                        </div>
                    </div>
                </a>

                <!-- Activities Card -->
                <a href="{{ route('activities.index') }}"
                    class="bg-gradient-to-br from-purple-500 to-purple-600 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-purple-100 text-sm">Aktiviteler</p>
                                <p class="text-3xl font-bold">{{ \App\Models\Activity::count() }}</p>
                            </div>
                            <div class="text-4xl opacity-80">🏃</div>
                        </div>
                    </div>
                </a>

                <!-- Meals Card -->
                <a href="{{ route('meals.index') }}"
                    class="bg-gradient-to-br from-pink-500 to-pink-600 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-pink-100 text-sm">Öğünler</p>
                                <p class="text-3xl font-bold">{{ \App\Models\Meal::count() }}</p>
                            </div>
                            <div class="text-4xl opacity-80">🍽️</div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Hızlı İşlemler</h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('customers.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition">
                            + Yeni Müşteri
                        </a>
                        <a href="{{ route('exercises.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 transition">
                            + Yeni Egzersiz
                        </a>
                        <a href="{{ route('foods.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 transition">
                            + Yeni Yiyecek
                        </a>
                        <a href="{{ route('activities.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 transition">
                            + Yeni Aktivite
                        </a>
                        <a href="{{ route('meals.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-pink-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 transition">
                            + Yeni Öğün
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>