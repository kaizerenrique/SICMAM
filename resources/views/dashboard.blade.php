<x-app-layout>
    <div class="py-12 pt-24">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 auto-rows-auto">
                    <!-- Primera Columna -->
                    <div class="bg-white mx-4 mb-8 col-span-1 md:col-span-1 rounded-xl shadow-xl">
                        <div class="">
                            <div class="flex flex-col items-center p-8 bg-blue-400 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                
                                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">{{ Auth::user()->name }}</h1>
                                
                                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">{{ Auth::user()->email }}</p>
                                
                                <div class="flex mt-3 -mx-2">
                                </div>
                            </div>
                            <div class="">
                                
                            </div>
                        </div>
                    </div>

                    <!-- Segunda Columna -->
                    <div class="bg-white mx-4 mb-8 col-span-2 md:col-span-3 rounded-xl shadow-xl">
                        <!-- tarjetas estadisticas -->
                        <livewire:dashboard-estadisticas/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
