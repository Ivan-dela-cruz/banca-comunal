<div {{  $visibleFrame["6"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
        <div class="font-medium text-base mr-auto">Situación Ecónomica y Financiera</div>
    </div>

    <div class=" intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="text-center whitespace-no-wrap" colspan="2">INGRESOS MENSUALES</th>
                <th class="text-center whitespace-no-wrap" colspan="2">EGRESOS MENSUALES</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-gray-200 text-gray-700">
                <td class="text-center whitespace-no-wrap">ACTIVOS</td>
                <td class="text-center whitespace-no-wrap">VALORES</td>
                <td class="text-center whitespace-nowrap">PASIVO</td>
                <td class="text-center whitespace-nowrap">VALORES</td>
            </tr>

            <tr class="intro-x">
                <td class="text-center">Cuentas por cobrar</td>
                <td class="text-center">
                    <input wire:model="accounts_receivable_as" type="text" class="input w-full border flex-1">
                    @error('accounts_receivable_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Deudas en Coop. o Bancos </td>
                <td class="text-center">
                    <input wire:model="bank_debts_pa" type="text" class="input w-full border flex-1">
                    @error('bank_debts_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Mercaderias</td>
                <td class="text-center">
                    <input wire:model="merchandise_as" type="text" class="input w-full border flex-1">
                    @error('merchandise_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Seudas con proveedores</td>
                <td class="text-center">
                    <input wire:model="debts_suppliers_pa" type="text" class="input w-full border flex-1">
                    @error('debts_suppliers_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Inversion en cultivos</td>
                <td class="text-center">
                    <input wire:model="investment_crops_as" type="text" class="input w-full border flex-1">
                    @error('investment_crops_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Deudas con almacenes o comercios</td>
                <td class="text-center">
                    <input wire:model="debts_warehouses_pa" type="text" class="input w-full border flex-1">
                    @error('debts_warehouses_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Muebles y electrodomesticos</td>
                <td class="text-center">
                    <input wire:model="furniture_appliances_as" type="text" class="input w-full border flex-1">
                    @error('furniture_appliances_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center">Herramientas  y maquinarias</td>
                <td class="text-center">
                    <input wire:model="tools_machines_as" type="text" class="input w-full border flex-1">
                    @error('tools_machines_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">TOTAL DE DEUDAS</td>
                <td class="text-center">
                    <input wire:model="total_debts_pa" type="text" class="input w-full border flex-1" readonly>
                    @error('total_debts_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Terrenos</td>
                <td class="text-center">
                    <input wire:model="land_as" type="text" class="input w-full border flex-1">
                    @error('land_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">PATRIMONIO</td>
                <td class="text-center">
                    <input wire:model="patrimony_pa" type="text" class="input w-full border flex-1">
                    @error('patrimony_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Casas o construcciones</td>
                <td class="text-center">
                    <input wire:model="houses_buildings_as" type="text" class="input w-full border flex-1">
                    @error('houses_buildings_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center">Otros bienes</td>
                <td class="text-center">
                    <input wire:model="other_goods_as" type="text" class="input w-full border flex-1">
                    @error('other_goods_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center">TOTALES:</td>
                <td class="text-center">
                    <input wire:model="total_as" type="text" class="input w-full border flex-1" readonly>
                    @error('total_as') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">TOTALES: </td>
                <td class="text-center">
                    <input wire:model="total_pa" type="text" class="input w-full border flex-1" readonly>
                    @error('total_pa') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>

            <tr class="bg-gray-200 text-gray-700">
                <td class="text-center whitespace-no-wrap">INGRESOS</td>
                <td class="text-center whitespace-no-wrap"></td>
                <td class="text-center whitespace-nowrap">EGRESOS</td>
                <td class="text-center whitespace-nowrap"></td>
            </tr>

            <tr class="intro-x">
                <td class="text-center">Sueldo del socio</td>
                <td class="text-center">
                    <input wire:model="partner_salary_in" type="text" class="input w-full border flex-1">
                    @error('partner_salary_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Alimentación</td>
                <td class="text-center">
                    <input wire:model="feeding_ex" type="text" class="input w-full border flex-1">
                    @error('feeding_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Sueldo del cónyuge</td>
                <td class="text-center">
                    <input wire:model="spouse_salary_in" type="text" class="input w-full border flex-1">
                    @error('spouse_salary_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Salud</td>
                <td class="text-center">
                    <input wire:model="health_ex" type="text" class="input w-full border flex-1">
                    @error('health_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Ganancia por el comercio</td>
                <td class="text-center">
                    <input wire:model="profit_trade_in" type="text" class="input w-full border flex-1">
                    @error('profit_trade_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Servicios básicos</td>
                <td class="text-center">
                    <input wire:model="basic_services_ex" type="text" class="input w-full border flex-1">
                    @error('basic_services_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Arriendos recibidos</td>
                <td class="text-center">
                    <input wire:model="leases_received_in" type="text" class="input w-full border flex-1">
                    @error('leases_received_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Educación</td>
                <td class="text-center">
                    <input wire:model="education_ex" type="text" class="input w-full border flex-1">
                    @error('education_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Pro alquiler de vehículos</td>
                <td class="text-center">
                    <input wire:model="rent_car_in" type="text" class="input w-full border flex-1">
                    @error('rent_car_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Transporte</td>
                <td class="text-center">
                    <input wire:model="transport_ex" type="text" class="input w-full border flex-1">
                    @error('transport_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Terrenos</td>
                <td class="text-center">
                    <input wire:model="land_in" type="text" class="input w-full border flex-1">
                    @error('land_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Arriendos</td>
                <td class="text-center">
                    <input wire:model="leases_ex" type="text" class="input w-full border flex-1">
                    @error('leases_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Otros Ingresos</td>
                <td class="text-center">
                    <input wire:model="other_income_in" type="text" class="input w-full border flex-1">
                    @error('other_income_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">Otros Egresos</td>
                <td class="text-center">
                    <input wire:model="other_expenses_ex" type="text" class="input w-full border flex-1">
                    @error('other_expenses_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">TOTALES:</td>
                <td class="text-center">
                    <input wire:model="total_in" type="text" class="input w-full border flex-1" readonly>
                    @error('total_in') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
                <td class="text-center">TOTALES:</td>
                <td class="text-center">
                    <input wire:model="total_ex" type="text" class="input w-full border flex-1" readonly>
                    @error('total_ex') <li class="text-theme-6">{{$message}}</li>  @enderror
                </td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
        <button wire:click.prevent="storeStep6()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
    </div>

</div>


