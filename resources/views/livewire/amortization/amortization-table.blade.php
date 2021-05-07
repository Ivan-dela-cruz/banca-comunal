<div>
    <h2 class="intro-y text-lg font-medium mt-10">Tabla de Amortización Francés</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <!-- BEGIN: Operation Data -->
            <div class="intro-y box ">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Datos de la Operacion</h2>
                </div>

                <div class="grid grid-cols-12 gap-6">
                  <div class="col-span-12 lg:col-span-3 xxl:col-span-3">
                      <div class="p-5">
                          <div>
                              <label>Monto</label>
                              <input wire:model="amount" wire:keydown.enter="fData()" type="text" class="input w-full border mt-2" placeholder="$00.00">
                          </div>
                          <div class="mt-3">
                              <label>Periodo <small>(Dias)</small></label>
                              <input wire:model="period" type="text" class="input w-full border mt-2" placeholder="0 Dias" readonly>
                          </div>

                      </div>
                  </div>
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-3">
                        <div class="p-5">
                            <div >
                                <label>Tasa de Interes</label>
                                <input wire:model="interest_rate" type="text" class="input w-full border mt-2" placeholder="0%">
                            </div>
                            <div class="mt-3">
                                <label>Tipo de Credito</label>
                                <input type="text" class="input w-full border mt-2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-3">
                        <div class="p-5">
                            <div>
                                <label>Plazo <small>(Meses)</small></label>
                                <input wire:model="term" wire:keydown.enter="fData()" type="text" class="input w-full border mt-2" placeholder="0 Meses">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-3">
                        <div class="p-5">
                            <div >
                                <label>Cuota Fija <small>(Mensual)</small></label>
                                <input wire:model="fixed_free" type="text" class="input w-full border mt-2" placeholder="$00.00" readonly>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- END: Operation Data -->
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <div class="intro-y box">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Datos de la Operacion</h2>
                </div>

                <div class="overflow-x-auto p-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Periodo</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Fecha de Pago</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Capital</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Interes</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Dividiendo</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Total A Pagar</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Saldo</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data_table as $data)
                                <tr class="bg-gray-200 dark:bg-dark-1">
                                    <td class="border-b dark:border-dark-5">{{$count++}}</td>
                                    <td class="border-b dark:border-dark-5">#</td>
                                    <td class="border-b dark:border-dark-5">{{$data['amount']}}</td>
                                    <td class="border-b dark:border-dark-5">{{$data['interest']}}</td>
                                    <td class="border-b dark:border-dark-5">{{$data['dividing']}}</td>
                                    <td class="border-b dark:border-dark-5">{{$data['total_payment']}}</td>
                                    <td class="border-b dark:border-dark-5">{{$data['balance']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
