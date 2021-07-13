<div>
    @include('modals.accounts.edit')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <div class="col-span-12 mt-5">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Cuentas </h2>

                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button wire:click.prevent="refresh()" class="button text-white bg-theme-9 shadow-md mr-2 ml-2">
                            <i class="fas fa-redo-alt"></i>
                       </button>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class=" w-56 relative text-gray-700 dark:text-gray-300">
                                <input wire:keydown.enter="searchChange()" wire:model="search_number" type="text" class="input w-56  box pr-0 placeholder-theme-13" placeholder="Buscar ">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fa fa-search" ></i>
                            </div>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-6 ml-2">
                            <select  wire:model="member_type" class="input w-full border flex-1">
                                <option value="Todos">Todos</option>
                                <option value="cliente">Cliente</option>
                                <option value="socio">Socio</option>
                                <option value="socio fundador">Socio Fundador</option>
                            </select>
                        </div>
                        <button class="ml-3 button box flex items-center text-gray-700 dark:text-gray-300">
                            <i class="hidden sm:block w-4 h-4 mr-2 fas fa-file"></i> Export to PDF
                        </button>

                    </div>

                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>

                                <th class="whitespace-no-wrap">Cliente</th>
                                <th class="whitespace-no-wrap">Tipo</th>
                                <th class="text-center whitespace-no-wrap">Cuenta</th>
                                <th class="text-center whitespace-no-wrap">Código</th>
                                <th class="whitespace-no-wrap">Creación</th>
                                <th class="whitespace-no-wrap">Modificado</th>
                                <th class="text-center whitespace-no-wrap">Estado</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($accounts as $a)
                                <tr class="intro-x">

                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $a->member->last_name }} {{ $a->member->name }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $a->member->doc_number }}</div>
                                    </td>
                                    <td class="w-40">
                                        <span> {{ $a->type }} </span>
                                    </td>
                                    <td class="w-40">
                                        <span> {{ $a->number }} </span>
                                    </td>
                                    <td class="text-center">{{ $a->code }}</td>
                                    <td class="w-40">
                                        <span> {{\Carbon\Carbon::parse($a->created_at)->format('Y-m-d') }}  </span>
                                    </td>
                                    <td class="w-40">
                                        <span> {{\Carbon\Carbon::parse($a->updated_at)->format('Y-m-d') }}  </span>
                                    </td>
                                    <td class="w-40">
                                        @if($a->status=="activo")
                                        <div class="py-1 px-2 rounded-full text-xs text-center bg-theme-9 text-white cursor-pointer font-medium">
                                            {{ $a->status }}
                                        </div>
                                        @endif
                                        @if($a->status=="revision")
                                        <div class="py-1 px-2 rounded-full text-xs text-center bg-theme-1 text-white cursor-pointer font-medium">
                                            {{ $a->status }}
                                        </div>
                                        @endif
                                        @if($a->status=="inactivo")
                                        <div class="py-1 px-2 rounded-full text-xs text-center bg-theme-12 text-white cursor-pointer font-medium">
                                            {{ $a->status }}
                                        </div>
                                        @endif
                                        @if($a->status=="bloqueado")
                                        <div class="py-1 px-2 rounded-full text-xs text-center bg-theme-6 text-white cursor-pointer font-medium">
                                            {{ $a->status }}
                                        </div>
                                        @endif

                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            @can('update_Account')
                                            <a href="javascript:void(0);" wire:click="edit({{ $a->id }})" class="flex items-center mr-3"
                                            data-toggle="modal"
                                            data-target="#accountModal">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar
                                            </a>
                                            @endcan
                                            @can('destroy_account')
                                                <a class="flex items-center text-theme-6" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                                                </a>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                           @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    {{ $accounts->links('livewire.pagination')}}
                    <select class="w-20 input box mt-3 sm:mt-0" wire:model="perPage">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="35">35</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>


</div>
