<div class="container">
    <div class="p-8 rounded-md w-full">
        <div class="flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 text-2xl">Listado de Aeronaves</h2>               
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
                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400" wire:click="agregaraeronave">
                            Registrar Aeronave
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-8 rounded-md w-full">
        <div class="flex items-center justify-between pb-6">            
                <div class="inline-block w-full shadow rounded-lg overflow-x-auto">
                    <table class="table-auto w-full leading-normal">
                        <thead class="border border-blue-900 bg-blue-600">
                            <tr>
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
                                    Horas
                                </th>
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Horas Restantes
                                </th>                                
                                <th class="px-5 py-3 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                    Acciones
                                </th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aeronaves as $aeronave)
                                <tr>                                    
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
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$aeronave->horasvuelo}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400" wire:click="modalhorasvuelo({{$aeronave->id}})">
                                            {{$aeronave->horasvuelorestantes}}
                                        </button>
                                    </td>                                    
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <button class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-green-400">
                                            Ver
                                        </button>
                                        <button class="bg-blue-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer hover:bg-blue-400"
                                        wire:click="editaraeronave({{$aeronave->id}})">
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
    <!-- Modal de Horas de Vuelo  -->
    <x-jet-dialog-modal wire:model="modalhoras">
        <x-slot name="title">
            {{$titulo}}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-4 gap-4 text-sm text-gray-600">
                <div class="col-span-4 sm:col-span-1">
                    <x-jet-label for="name" value="{{ __('Identificador') }}" />
                    <x-jet-input id="identificador" type="text" class="mt-1 block w-full" wire:model.defer="identificador" disabled/>
                    <x-jet-input-error for="identificador" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <x-jet-label for="name" value="{{ __('Horas de Vuelo') }}" />
                    <x-jet-input id="horasvuelo" type="text" class="mt-1 block w-full" wire:model.defer="horasvuelo" disabled/>
                    <x-jet-input-error for="horasvuelo" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <x-jet-label for="name" value="{{ __('Horas Restante') }}" />
                    <x-jet-input id="horasvuelorestantes" type="text" class="mt-1 block w-full" wire:model.defer="horasvuelorestantes" disabled />
                    <x-jet-input-error for="horasvuelorestantes" class="mt-2" />
                </div> 
                <div class="col-span-4 sm:col-span-1">
                    <x-jet-label for="name" value="{{ __('Horas') }}" />
                    <x-jet-input id="nuevashoras" type="text" class="mt-1 block w-full" wire:model.defer="nuevashoras"/>
                    <x-jet-input-error for="nuevashoras" class="mt-2" />
                </div>                
            </div>     
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalhoras', false)" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="restarhoras()" wire:loading.attr="disabled">
                {{ __('Aceptar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

<!-- Modal de Aeronave  -->
    <x-jet-dialog-modal wire:model="modalaeronave">
        <x-slot name="title">
            {{$titulo}}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-4 gap-4 text-sm text-gray-600">
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="aeronave.nombre" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.nombre"/>
                    <x-jet-input-error for="aeronave.nombre" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="campaeronavetipo" value="{{ __('Tipo de Aeronave') }}" />
                        <select name="aeronave.tipo" id="aeronave.tipo" wire:model.defer="aeronave.tipo" class="mt-1 block w-full"> 
                            <option value="" selected>Selecciona el tipo</option>                 
                            <option value="Avión">Avión</option>
                            <option value="Helicóptero">Helicóptero</option>
                        </select> 
                    <x-jet-input-error for="aeronave.tipo" class="mt-2" />                   
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="matricula" value="{{ __('Matricula') }}" />
                    <x-jet-input id="aeronave.matricula" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.matricula"/>
                    <x-jet-input-error for="aeronave.matricula" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="fabricante" value="{{ __('Fabricante') }}" />
                    <x-jet-input id="aeronave.fabricante" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.fabricante"/>
                    <x-jet-input-error for="aeronave.fabricante" class="mt-2" />
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="fnacimiento" value="{{ __('Fecha de Adquisición') }}" />
                    <x-jet-input id="aeronave.introducido" type="date" class="mt-1 block w-full" wire:model.defer="aeronave.introducido" />
                    <x-jet-input-error for="aeronave.introducido" class="mt-2" />
                </div> 
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="fnacimiento" value="{{ __('Primer Vuelo') }}" />
                    <x-jet-input id="aeronave.primer_vuelo" type="date" class="mt-1 block w-full" wire:model.defer="aeronave.primer_vuelo" />
                    <x-jet-input-error for="aeronave.primer_vuelo" class="mt-2" />
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="campaeronavetipo" value="{{ __('Estado') }}" />
                        <select name="aeronave.estado" id="aeronave.estado" wire:model.defer="aeronave.estado" class="mt-1 block w-full"> 
                            <option value="" selected>Selecciona el Estado</option>                 
                            <option value="Operativo">Operativo</option>
                            <option value="En Mantenimiento">En Mantenimiento</option>
                            <option value="Dañado">Dañado</option>
                            <option value="Desincorporado">Desincorporado</option>
                        </select> 
                    <x-jet-input-error for="aeronave.estado" class="mt-2" />                   
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="fnacimiento" value="{{ __('Mantenimiento Programado') }}" />
                    <x-jet-input id="aeronave.mantenimientoProgramado" type="date" class="mt-1 block w-full" wire:model.defer="aeronave.mantenimientoProgramado" />
                    <x-jet-input-error for="aeronave.mantenimientoProgramado" class="mt-2" />
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="horasvuelo" value="{{ __('Horas de vuelo de la Aeronave') }}" />
                    <x-jet-input id="aeronave.horasvuelo" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.horasvuelo"/>
                    <x-jet-input-error for="aeronave.horasvuelo" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="horasvuelorestantes" value="{{ __('Horas de vuelo Iniciales') }}" />
                    <x-jet-input id="aeronave.horasvuelorestantes" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.horasvuelorestantes"/>
                    <x-jet-input-error for="aeronave.horasvuelorestantes" class="mt-2" />
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="usuario" value="{{ __('Usuario de la Aeronave') }}" />
                    <x-jet-input id="aeronave.usuario" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.usuario"/>
                    <x-jet-input-error for="aeronave.usuario" class="mt-2" />
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <x-jet-label for="otros_usuarios" value="{{ __('Otro Usuario') }}" />
                    <x-jet-input id="aeronave.otros_usuarios" type="text" class="mt-1 block w-full" wire:model.defer="aeronave.otros_usuarios"/>
                    <x-jet-input-error for="aeronave.otros_usuarios" class="mt-2" />
                </div>

            </div>     
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalaeronave', false)" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="guardaraeronave()" wire:loading.attr="disabled">
                {{ __('Aceptar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>   
</div>



