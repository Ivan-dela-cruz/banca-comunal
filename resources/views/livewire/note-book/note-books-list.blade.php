<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Libretas</h2>
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
                                <th class="whitespace-no-wrap">Emisión</th>
                                <th class="whitespace-no-wrap">Cliente</th>
                                <th class="whitespace-no-wrap">Tipo</th>
                                <th class="text-center whitespace-no-wrap">N° Libreta</th>
                                <th class="text-center whitespace-no-wrap">Depositos</th>
                                <th class="text-center whitespace-no-wrap">Retiro</th>
                                <th class="text-center whitespace-no-wrap">Saldo</th>
                                <th class="text-center whitespace-no-wrap">Estado</th>
                                <th class="text-center whitespace-no-wrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($fakers, 0, 2) as $faker)
                                <tr class="intro-x">
                                    <td class="w-40">
                                       <span> {{ $faker['dates'][0] }}</span>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{ $faker['users'][0]['name'] }}</a>
                                        <div class="text-gray-600 text-xs whitespace-no-wrap">1750474049</div>
                                    </td>
                                    <td class="w-40">
                                        <span> Ahorros </span>
                                     </td>
                                     <td class="w-40">
                                        <span> LBA-0002 </span>
                                     </td>
                                    <td class="text-center">500</td>
                                    <td class="w-40">
                                        <span> 700</span>
                                     </td>
                                     <td class="w-40">
                                        <span> 200 </span>
                                     </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-theme-9' : 'text-theme-6' }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                        </div>
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
    </div>
</div>
