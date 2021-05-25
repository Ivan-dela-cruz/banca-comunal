<div>
  
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Aportes Socios</h2>
    </div>
    <div class=" mt-5 intro-y box p-5">

        <div class="font-medium text-base mb-5"> {{ $names }} </div>
        <div class="grid grid-cols-1 gap-4  md:grid-cols-2 mb-5">
            <div>
                <label>Socio</label>
                <input wire:keydown.enter="findMember()" wire:model="doc_number" type="text" class="input w-full border mt-2" placeholder="Ingrese cédula de identidad">
            </div>
            <div>
                <label>Número de cuenta</label>
                <input wire:keydown.enter="findByAccount()" wire:model="number_account" type="text" class="input w-full border mt-2" placeholder="Ingrese el número de cuenta">
            </div>
            <div>
                <label>Monto</label>
                <input wire:model="amount" type="text" class="input w-full border mt-2" placeholder="00.00">
            </div>
            <div>
                <label>Fecha</label>
                <input wire:model="date" type="date" class="input w-full border mt-2" placeholder="Ingrese el número de cuenta">
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label>Descripción</label>
                <textarea  wire:model="description" type="text" class="input w-full border mt-2" placeholder="Ingrese cédula de identidad"></textarea>
            </div>
            <div class="mt-1">
                <label>Estado</label>
                <div class="mt-2">
                    <input wire:model="status" type="checkbox" class="input input--switch border">
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="{{$action === 'POST' ? 'store()' : 'update()'}}" class="button w-24 justify-center block bg-theme-1 text-white ml-2">{{$action === 'POST' ? 'Guardar': 'Actualizar'}}</button>
            <button wire:click.prevent="resetInputFields()" class="button w-24 justify-center block bg-theme-6 text-white ml-2">Cancelar</button>
        </div>
    </div>

    <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Detalle de Aportes  </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="ml-3 button box flex items-center text-gray-700 dark:text-gray-300">
                            <i  class="hidden sm:block w-4 h-4 mr-2 fas fa-file"></i> Export to PDF
                        </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">N°</th>
                                <th class="whitespace-no-wrap">Fecha</th>
                                <th class="whitespace-no-wrap">Socio</th>
                                <th class="text-center whitespace-no-wrap">Aporte</th>
                                <th class="text-center whitespace-no-wrap">Descripción</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           <p hidden> {{ $cont=1 }}</p>
                            @foreach ($incomes as $in)
                                <tr class="intro-x">
                                    <td class="w-auto text-center">
                                       <span> {{ $cont ++ }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $in->date }}</span>
                                    </td>
                                    <td class="w-40">
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $in->member->last_name }} {{ $in->member->name }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $in->member->doc_number }}</div>
                                     </td>
                                     <td class="w-40 text-center">
                                        <span> {{ $in->amount }} </span>
                                     </td>
                                    <td class="w-40 text-center">
                                        <span>{{ $in->description }}</span>
                                     </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a wire:click="edit({{ $in->id}})" class="flex items-center mr-3" href="javascript:;">
                                                <i class="w-4 h-4 mr-1 fas fa-edit"></i> Edit
                                            </a>
                                            <a class="flex items-center text-theme-6" href="javascript:;">
                                                <i  class="w-4 h-4 mr-1 fas fa-trash-alt"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!-- END: Weekly Top Products -->
</div>
