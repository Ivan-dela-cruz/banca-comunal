<div>
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">Libretas de ahorro</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="intro-y box bg-theme-1 p-5 mt-6">
                <button type="button" class="button button--lg flex items-center justify-center text-gray-700 dark:text-gray-300 w-full bg-white dark:bg-theme-1 mt-2">
                    <i class="w-4 h-4 mr-2 fas fa-file" ></i> Obtener Datos
                </button>
                <div class="border-t border-theme-3  dark:border-dark-5 mt-5 pt-5 text-white ">
                    <div class="grid grid-cols-12 gap-2 row-gap-1">
                        <div class="col-span-12">
                            <div class="text-xs">Desde</div>
                            <input wire:model="date"  type="date" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                        <div class="col-span-12">
                            <div class="text-xs">Hasta</div>
                            <input wire:model="dateFin" type="date" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                        <div class="col-span-12">
                            <div class="text-xs">Cliente</div>
                            <input disabled wire:model="names" type="text" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                        <div class="col-span-12">
                            <div class="text-xs">Cédula</div>
                            <input disabled wire:model="doc_number" type="text" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                        <div class="col-span-12">
                            <div class="text-xs">N° Cuenta</div>
                            <input disabled wire:model="account_num" type="text" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                        <div class="col-span-12">
                            <div class="text-xs">Tipo de cuenta</div>
                            <input disabled wire:model="type_partner" type="text" class="input w-full border mt-2 flex-1 text-gray-900 dark:text-white" >
                        </div>
                       
                    </div>
                </div>
              
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700 dark:text-gray-300 fas fa-search" ></i>
                    <input wire:keydown.enter="findMember()" wire:model="search_member" type="text" class="input w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13" placeholder="N° de cuenta">
                   
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="button text-white bg-theme-1 shadow-md mr-2">
                        <i class="w-4 h-4 fas fa-print"></i>
                        Imprimir</button>
                    
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                        <tr>
                            <th class="whitespace-no-wrap">N°</th>
                            <th class="whitespace-no-wrap">Fecha</th>
                            <th class=" whitespace-no-wrap">Detalle</th>
                            <th class="text-center whitespace-no-wrap">Deposito</th>
                            <th class="text-center whitespace-no-wrap">Retiro</th>
                            <th class="text-center whitespace-no-wrap">Saldo</th>
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
                                <td class="w-auto text-left">
                                    <span  >{{ $data->description }} </span>
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
                                
                                
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
</div>
