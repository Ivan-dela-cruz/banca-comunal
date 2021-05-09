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
    <div class="grid grid-cols-12 gap-12 mt-5">
        <div class="intro-y datatable-wrapper box p-5 mt-5">
            <table class="table table-report table-report--bordered display datatable w-full">
                <thead>
                    <tr>
                        <th class="border-b whitespace-no-wrap">N°</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Fecha</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Detalle</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Deposito</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Retiro</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (array_slice($fakers, 0, 3) as $faker)
                        <tr>
                            <td class="border-b">
                                <span>1</span>
                            </td>
                            <td class="text-center border-b">
                                <span>12/12/2021</span>
                            </td>
                            <td class="text-center border-b">
                                <span>Detalle</span>
                            </td>
                            <td class="w-40 border-b">
                                <span>34</span>
                            </td>
                            <td class="border-b w-5">
                                <span>300</span>
                            </td>
                            <td class="border-b w-5">
                                <span>300</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
