<div>

    <div class="intro-y block sm:flex items-center h-10 mt-4">
        <h2 class="text-lg font-medium truncate mr-5">Retiros</h2>
        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
            <input wire:keydown.enter="findByAccount()" wire:model="account_number" type="text" class="input w-64  box pr-0 placeholder-theme-13" placeholder="Buscar por número de cuenta">
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fa fa-search" ></i>
        </div>
    </div>
    <div class=" mt-5 intro-y box p-5">

{{--        <div class="font-medium text-base mb-5"> {{ $names }} </div>--}}
        <div class="flex items-center mb-5">
            <div class="font-medium text-base mr-auto text-2xl">{{$names}}</div>
            <div class="font-medium text-base text-theme-9 text-3xl"><h1>{{$total_balance}}</h1></div>
        </div>

        <div class="grid grid-cols-1 gap-4  md:grid-cols-2 mb-5">
            <div>
                <label>Socio</label>
                <input {{$action === 'POST' ? '' : 'disabled'}} wire:keydown.enter="findMember()" wire:model="doc_number" type="text" class="input w-full border mt-2" placeholder="Ingrese cédula de identidad">
                @error('doc_number') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Número de cuenta</label>
                <input {{$action === 'POST' ? '' : 'disabled'}} wire:keydown.enter="findByAccount()" wire:model="account_number" type="text" class="input w-full border mt-2" placeholder="Ingrese el número de cuenta">
                @error('account_number') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Monto</label>
                <input {{$action === 'POST' ? '' : 'disabled'}} wire:model="retreats" type="text" class="input w-full border mt-2" placeholder="00.00">
                @error('retreats') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Monto en letras</label>
                <input {{$action === 'POST' ? '' : 'disabled'}} wire:model="amount_letters" type="text" class="input w-full border mt-2" placeholder="Ingrese el monto en letras">
                @error('amount_letters') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Fecha</label>
                <input wire:model="date" type="date" class="input w-full border mt-2" placeholder="Ingrese el número de cuenta">
                @error('date') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Lugar</label>
                <input wire:model="place" type="text" class="input w-full border mt-2" placeholder="Ingrese el lugar">
                @error('place') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div>
                <label>Tipo de Socio</label>
                <select class="input w-full border mt-2" wire:model="type_partner">
                    <option value="">Seleccionar</option>
                    <option value="cliente">Cliente</option>
                    <option value="socio">Socio</option>
                    <option value="socio fundador">Socio Fundador</option>
                </select>
                @error('type_partner') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
            <div >
                <label>Estado</label>
                <select class="input w-full border mt-2" wire:model="status">
                    <option value="Finalizado">Finalizado</option>
                    <option value="Anulado">Anulado</option>
                </select>
                @error('status') <span class="text-theme-6">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label>Descripción</label>
                <textarea  wire:model="description" type="text" class="input w-full border mt-2" placeholder="Ingrese cédula de identidad"></textarea>
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
            <h2 class="text-lg font-medium truncate mr-5">Detalle de Retiros  </h2>
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
                    <th class="text-center whitespace-no-wrap">Deposito</th>
                    <th class="text-center whitespace-no-wrap">Retiro</th>
                    <th class="text-center whitespace-no-wrap">Saldo</th>
                    <th class="text-center whitespace-no-wrap">Transacción</th>
                    <th class="text-center whitespace-no-wrap">Estado</th>
                    <th class="text-center whitespace-no-wrap">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <p hidden> {{ $cont=1 }}</p>
                @foreach ($transactions as $data)
                    <tr class="intro-x">
                        <td class="w-auto text-center">
                            <span> {{ $cont ++ }}</span>
                        </td>
                        <td class="w-40">
                            <span>{{ \Carbon\Carbon::parse($data->date)->format('Y-M-d')}}</span>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-no-wrap">{{ $data->member->last_name }} {{ $data->member->name }}</a>
                            <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $data->member->doc_number }}</div>
                        </td>
                        <td class="w-20 text-center">
                            <span class="text-base text-theme-10" >$&nbsp;{{ $data->deposit }} </span>
                        </td>
                        <td class="w-20 text-center">
                            <span class="text-base text-theme-11">$&nbsp;{{ $data->retreats }} </span>
                        </td>
                        <td class="w-20 text-center">
                            <span class="text-base text-theme-9">$&nbsp;{{ $data->balance }}</span>
                        </td>
                        <td class="w-40 text-center">
                            <span class="px-2 py-1 rounded-full text-white {{$data->retreats == 0 ? 'bg-theme-10':'bg-theme-11'}}">{{$data->retreats == 0 ? 'Deposito':'Retiro'}}</span>
                        </td>
                        <td class="w-40 text-center">
                            <span class="px-2 py-1 rounded-full text-white mr-1 {{$data->status === 'Finalizado' ? 'bg-theme-9':'bg-theme-6'}}">{{ $data->status }}</span>
                        </td>
                        <td class="table-report__action">
                            <div class="flex justify-center items-center">

                                @if($cont == 2 && $data->deposit == 0)
                                    <a wire:click="edit({{ $data->id}})" class="flex items-center mr-3" href="javascript:;">
                                        <i class="w-4 h-4 fas fa-edit"></i> Editar
                                    </a>
                                @else
                                    <button disabled class="flex items-center mr-3 text-theme-6"><i class="w-4 h-4 fas fa-ban"></i> Editar</button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
            {{$transactions->links('livewire.pagination')}}
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
