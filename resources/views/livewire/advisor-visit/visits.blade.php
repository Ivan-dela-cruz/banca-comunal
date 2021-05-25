<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Visitas del asesor </h2>
                    <button wire:click.prevent="refresh()" class="ml-auto flex button text-white bg-theme-9 shadow-md ">
                        <i class="fas fa-redo-alt"></i>
                   </button>
                    
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-9 fas fa-file-medical fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month">
                                            {{ $new_re }}% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$new_re }}</div>
                                <div class="text-base text-gray-600 mt-1">Nuevos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-11 fas fa-file fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month">
                                            {{ $ref_re }}% <i data-feather="chevron-down" class="w-4 h-4 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$ref_re }}</div>
                                <div class="text-base text-gray-600 mt-1">Refinaciamiento</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-10 fas fa-eye fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month">
                                            {{$rev_re }}% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ $rev_re}}</div>
                                <div class="text-base text-gray-600 mt-1">Revisión</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i class="report-box__icon text-theme-6 fas fa-trash-alt fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month">
                                            {{ $an_re }}% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{$an_re }}</div>
                                <div class="text-base text-gray-600 mt-1">Anulados</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Vistas realizadas </h2>
                   
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                       
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class=" w-56 relative text-gray-700 dark:text-gray-300">
                                <input wire:keydown.enter="searchChange()" wire:model="search_number" type="text" class="input w-56  box pr-0 placeholder-theme-13" placeholder="Buscar ">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fa fa-search" ></i>
                            </div>
                        </div>
                        
                        <div class="intro-y col-span-12 sm:col-span-6 ml-2">
                            <select  wire:model="member_type" class="input w-full border flex-1">
                                <option value="Todos">Todos</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Refinanciación">Refinanciamiento</option>
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
                                <th class="whitespace-no-wrap">Código</th>
                                <th class="whitespace-no-wrap">Cliente</th>
                                <th class="whitespace-no-wrap">Tipo</th>
                                <th class="text-center whitespace-no-wrap">Monto</th>
                                <th class="text-center whitespace-no-wrap">Couta</th>
                                <th class="whitespace-no-wrap">Creación</th>
                                <th class="text-center whitespace-no-wrap">Estado</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_requests as $lr )
                            <tr class="intro-x">
                                <td class="w-40">
                                    <span> {{ $lr->code }}</span>
                                 </td>
                                
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">{{ $lr->member->last_name }} {{ $lr->member->name }}</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $lr->member->doc_number }}</div>
                                </td>
                                <td class="w-40">
                                    <span> {{ $lr->credit_type }} </span>
                                 </td>
                                <td class="text-center">{{ $lr->amount }}</td>
                                <td class="text-center w-40">
                                    {{$lr->variable_fee?'Fija':'Variable'  }}
                                </td>
                                <td class="w-40">
                                    <span> {{ \Carbon\Carbon::parse($lr->created_at)->format('Y-m-d') }}</span>
                                 </td>
                                <td class="text-center w-40">
                                    {{$lr->status}}
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="">
                                            <i  class="fas fa-edit w-4 h-4 mr-1"></i> Edit
                                        </a>
                                        <a class="flex items-center text-theme-6" href="">
                                            <i  class="fas fa-trash-alt w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    <ul class="pagination">
                       
                    </ul>
                    <select class="w-20 input box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
</div>

