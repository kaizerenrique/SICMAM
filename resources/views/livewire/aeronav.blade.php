<div class="container">
    <div class="p-8 rounded-md w-full">
        <div class="flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 text-2xl">Listado de Aeronaves</h2>
                <span class="text-base">Lista de las aeronaves registradas</span>                
            </div>            
            <div class="flex items-center justify-between">
                <div class="flex bg-gray-50 items-center p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>                    
                    <input wire:model="buscar" type="search" placeholder="Buscar" class="bg-gray-50 outline-none ml-1 block rounded-md" name="">
                    <div class="ml-6">
                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400">
                            Registrar Aeronave
                        </button>
                    </div>
                </div>
                <div class="lg:ml-40 ml-10 space-x-4">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="px-8 rounded-md w-full">
        <div class="flex items-center justify-between pb-6">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead class="border border-blue-900 bg-blue-600">
                            <tr>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Imagen
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Matricula
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Tipo
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Fabricante
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Estatus
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Mantenimiento Programado
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Especificaciones
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Acciones
                                </th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aeronaves as $aeronave)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-20 h-20">
                                                <img class="w-full h-full rounded-full"
                                                    src="http://3.bp.blogspot.com/-DRAcqlAlVDY/VFgeNCv_ukI/AAAAAAAACx0/kIBFPP69nSA/s1600/bell%2B412epgnb.jpg"
                                                    alt="" />
                                            </div>                                            
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->id}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->nombre}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">                                            
                                            {{$aeronave->matricula}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->tipo}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->fabricante}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->estado}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->mantenimientoProgramado}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400">
                                            Especificaciones
                                        </button>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <button class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-green-400">
                                            Ver
                                        </button>
                                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400">
                                            Editar
                                        </button>
                                        <button class="bg-rose-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-rose-400">
                                            Borrar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
                {{ $aeronaves->links() }}
            </div>
        </div>
    </div>    
</div>

