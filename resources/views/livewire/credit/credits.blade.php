<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Créditos </h2>
                    <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10">
                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Recargar
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-9 fas fas fa-calendar-check fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month">
                                            33% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">0</div>
                                <div class="text-base text-gray-600 mt-1">Finalizados</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-11 fas fa-check-double fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month">
                                            2% <i data-feather="chevron-down" class="w-4 h-4 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">0</div>
                                <div class="text-base text-gray-600 mt-1">Refinaciados</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i  class="report-box__icon text-theme-10 fas fa-calendar-alt fa-2x"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month">
                                            12% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">0</div>
                                <div class="text-base text-gray-600 mt-1">En proceso</div>
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
                                            22% <i data-feather="chevron-up" class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">0</div>
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
                    <h2 class="text-lg font-medium truncate mr-5">Solicitudes</h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="ml-3 button box flex items-center text-gray-700 dark:text-gray-300">
                            <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                        </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">Fecha</th>
                                <th class="whitespace-no-wrap">Cliente</th>
                                <th class="whitespace-no-wrap">Tipo</th>
                                <th class="text-center whitespace-no-wrap">Monto</th>
                                <th class="text-center whitespace-no-wrap">N° Coutas</th>
                                <th class="text-center whitespace-no-wrap">Mensual</th>
                                <th class="text-center whitespace-no-wrap">Saldo</th>
                                <th class="text-center whitespace-no-wrap">Estado</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($credits as $cr)
                                <tr class="intro-x">
                                    <td class="w-40">
                                       <span> {{ \Carbon\Carbon::parse( $cr->created_at)->format('Y-m-d') }}</span>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{$cr->member->last_name }} {{$cr->member->name }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{$cr->member->doc_number }}</div>
                                    </td>
                                    <td class="w-40">
                                        <span> N/A </span>
                                     </td>
                                     <td class="w-40">
                                        <span> {{$cr->amount }} </span>
                                     </td>
                                    <td class="text-center">{{$cr->term }}</td>
                                    <td class="w-40">
                                        <span> {{$cr->fixed_free }} </span>
                                     </td>
                                     <td class="w-40">
                                        <span> {{$cr->balance }} </span>
                                     </td>
                                     <td class="w-40">
                                        <span> {{$cr->status }} </span>
                                     </td>
                                    
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-theme-6" href="">
                                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    
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
