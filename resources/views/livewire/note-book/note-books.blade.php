<div>
  
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Libreta de Ahorros</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="intro-y box p-5">
                <div>
                    <label>Cliente</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Ingrese cédula de identidad">
                </div>
                <div>
                    <label>Número de cuenta</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Ingrese el número de cuenta">
                </div>
                <div class="mt-3">
                    <label>Estado</label>
                    <div class="mt-2">
                        <input type="checkbox" class="input input--switch border">
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                    <button type="button" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Detalle de transacciones</h2>
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
                                <th class="whitespace-no-wrap">N°</th>
                                <th class="whitespace-no-wrap">Fecha</th>
                                <th class="whitespace-no-wrap">Detalle</th>
                                <th class="text-center whitespace-no-wrap">Deposito</th>
                                <th class="text-center whitespace-no-wrap">Retiro</th>
                                <th class="text-center whitespace-no-wrap">Saldo</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           <p hidden> {{ $cont=1 }}</p>
                            @foreach (array_slice($fakers, 0, 2) as $faker)
                                <tr class="intro-x">
                                    <td class="w-auto text-center">
                                       <span> {{ $cont ++ }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $faker['dates'][0] }}</span>
                                    </td>
                                    <td class="w-40">
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $faker['products'][0]['name'] }}</a>
                                     </td>
                                     <td class="w-40 text-center">
                                        <span> 100 </span>
                                     </td>
                                    <td class="text-center">0</td>
                                    <td class="w-40 text-center">
                                        <span> 400 </span>
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
                    <ul class="pagination">
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">1</a>
                        </li>
                        <li>
                            <a class="pagination__link pagination__link--active" href="">2</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">3</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">...</a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pagination__link" href="">
                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li>
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
