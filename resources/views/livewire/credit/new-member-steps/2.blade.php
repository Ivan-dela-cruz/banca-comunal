<div {{  $visibleFrame["2"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">Información del Socio</h2>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="p-5">
                        <div>
                            <label>Cédula</label>
                            <input wire:model="dni" type="text" class="input w-full border mt-2 @error('dni')  border-red-400 @enderror" placeholder="Número de Documento">
                        </div>
                        <div class="mt-3">
                            <label>Nombre(s)</label>
                            <input wire:model="name" type="text" class="input w-full border mt-2 @error('name')  border-red-400 @enderror" placeholder="Nombre(s)">
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="p-5">
                        <div>
                            <label>Dirección</label>
                            <input wire:model="address" type="text" class="input w-full border mt-2 @error('address')  border-red-400 @enderror" placeholder="Dirección">
                        </div>
                        <div class="mt-3">
                            <label>Teléfono</label>
                            <input wire:model="phone" type="text" class="input w-full border mt-2 @error('phone')  border-red-400 @enderror" placeholder="Teléfono">
                        </div>
                    </div>
                </div>
                
            </div>
    </div>


    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
       
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">Datos de la Operacion</h2>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="p-5">
                        <div>
                            <label>Monto</label>
                            <input wire:model="amount" wire:keyup="fData()" type="text" class="input w-full border mt-2 @error('amount')  border-red-400 @enderror" placeholder="$00.00">
                        </div>
                        <div class="mt-3">
                            <label>Plazo <small>(Meses)</small></label>
                            <input wire:model="term" wire:keyup="fData()" type="text" class="input w-full border mt-2  @error('term')  border-red-400 @enderror" placeholder="0 Meses">
                        </div>
                        <div class="mt-3">
                            <label>Periodo <small>(Dias)</small></label>
                            <input wire:model="period" type="text" class="input w-full border mt-2" placeholder="0 Dias" readonly>
                        </div>
                    </div>
                </div>
            
                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="p-5">
                        <div>
                            <label>Tasa de Interes</label>
                            <input wire:model="interest_rate" wire:keyup="fData()" type="text" class="input w-full border mt-2 @error('interest_rate')  border-red-400 @enderror" placeholder="0%">
                        </div>
                        <div class="mt-3">
                            <label>Cuota Fija <small>(Mensual)</small></label>
                            <input wire:model="fixed_free" type="text" class="input w-full border mt-2" placeholder="$00.00" readonly>
                        </div>
                        <div class="mt-3">
                            <label>Tipo de Credito</label>
                            <input type="text" class="input w-full border mt-2" placeholder="">
                        </div>
                    </div>
                </div>
                
            </div>

    </div>

    <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">Fecha</h2>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6 xxl:col-span-6">
                    <div class="p-5">
                        <div>
                            <label>Fecha de Liquidacion</label>
                            <input id="inputDate" wire:model="settlement_date" type="date" class="input w-full border mt-2">
                            <button id="btnDate" type="button" wire:click="fData()" hidden></button>
                        </div>
                        <div class="mt-3">
                            <label>Fecha de Vencimiento</label>
                            <input wire:model="due_date" type="date" class="input w-full border mt-2 " readonly>
                        </div>
                        
                    </div>
                </div>
                
            </div>
    </div>


    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">Datos de la Operacion</h2>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
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
                                    <tr class="{{ $data['bg'] }}">
                                        <td class="border-b dark:border-dark-5">{{$data['period']}}</td>
                                        <td class="border-b dark:border-dark-5">{{ $data['payment_date'] }}</td>
                                        <td class="border-b dark:border-dark-5">$&nbsp;{{$data['amount']}}</td>
                                        <td class="border-b dark:border-dark-5">$&nbsp;{{$data['interest']}}</td>
                                        <td class="border-b dark:border-dark-5">$&nbsp;{{$data['dividing']}}</td>
                                        <td class="border-b dark:border-dark-5">$&nbsp;{{$data['total_payment']}}</td>
                                        <td class="border-b dark:border-dark-5">$&nbsp;{{$data['balance']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5 p-5">
                    <button wire:click.prevent="store()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
                </div>
            </div>
    </div>


    @section("map-script")
    <script>
         $('#inputDate').on('change',function(){
            $('#btnDate').click();
        });
    </script>
    @endsection
</div>
