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
                    <input wire:model="accounts_receivable_as" wire:keyup="totalAssets()" type="text" placeholder="00.00"
                           class="input w-full border flex-1  @error('accounts_receivable_as')  border-red-400 @enderror">

                </td>
                <td class="text-center">Deudas en Coop. o Bancos </td>
                <td class="text-center">
                    <input wire:model="bank_debts_pa"  wire:keyup="totalDebts()"  type="text" placeholder="00.00"
                           class="input w-full border flex-1  @error('bank_debts_pa')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Mercaderias</td>
                <td class="text-center">
                    <input wire:model="merchandise_as"  wire:keyup="totalAssets()"  type="text" placeholder="00.00"
                           class="input w-full border flex-1  @error('merchandise_as')  border-red-400 @enderror">
                </td>
                <td class="text-center">Deudas con proveedores</td>
                <td class="text-center">
                    <input wire:model="debts_suppliers_pa" wire:keyup="totalDebts()" type="text" placeholder="00.00"
                           class="input w-full border flex-1  @error('debts_suppliers_pa')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Inversion en cultivos</td>
                <td class="text-center">
                    <input wire:model="investment_crops_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1 @error('investment_crops_as')  border-red-400 @enderror">
                </td>
                <td class="text-center">Deudas con almacenes o comercios</td>
                <td class="text-center">
                    <input wire:model="debts_warehouses_pa" type="text" wire:keyup="totalDebts()" placeholder="00.00"
                           class="input w-full border flex-1  @error('debts_warehouses_pa')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Muebles y electrodomesticos</td>
                <td class="text-center">
                    <input wire:model="furniture_appliances_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1  @error('furniture_appliances_as')  border-red-400 @enderror">
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center">Herramientas  y maquinarias</td>
                <td class="text-center">
                    <input wire:model="tools_machines_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1 @error('tools_machines_as')  border-red-400 @enderror">
                </td>
                <td class="text-center" style="background: #EDF2F7"><strong>TOTAL DE DEUDAS</strong></td>
                <td class="text-center" style="background: #EDF2F7">
                    <input wire:model="total_debts_pa" type="text" wire:keyup="totalDebts()" placeholder="00.00"
                           class="input w-full border flex-1" readonly>
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Terrenos</td>
                <td class="text-center">
                    <input wire:model="land_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1 @error('land_as')  border-red-400 @enderror">
                </td>
                <td class="text-center">PATRIMONIO</td>
                <td class="text-center">
                    <input wire:model="patrimony_pa" type="text" wire:keyup="totalPassives()" placeholder="00.00"
                           class="input w-full border flex-1 @error('patrimony_pa')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Casas o construcciones</td>
                <td class="text-center">
                    <input wire:model="houses_buildings_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1 @error('houses_buildings_as')  border-red-400 @enderror">
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center">Otros bienes</td>
                <td class="text-center">
                    <input wire:model="other_goods_as" type="text" wire:keyup="totalAssets()" placeholder="00.00"
                           class="input w-full border flex-1 @error('other_goods_as')  border-red-400 @enderror">
                </td>

            </tr>
            <tr class="intro-x">
                <td class="text-center" style="background: #EDF2F7"><strong>TOTALES:</strong></td>
                <td class="text-center" style="background: #EDF2F7">
                    <input wire:model="total_as" type="text" class="input w-full border flex-1" readonly placeholder="00.00">
                </td>
                <td class="text-center" style="background: #EDF2F7"><strong>TOTALES:</strong> </td>
                <td class="text-center" style="background: #EDF2F7">
                    <input wire:model="total_pa" type="text" class="input w-full border flex-1" readonly  placeholder="00.00">
                </td>
            </tr>

            <tr class="bg-gray-200 text-gray-700">
                <td class="text-center whitespace-no-wrap" style="background: #EDF2F7"><strong>INGRESOS</strong></td>
                <td class="text-center whitespace-no-wrap" style="background: #EDF2F7"></td>
                <td class="text-center whitespace-no-wrap" style="background: #EDF2F7"><strong>EGRESOS</strong></td>
                <td class="text-center whitespace-no-wrap" style="background: #EDF2F7"></td>
            </tr>

            <tr class="intro-x">
                <td class="text-center">Sueldo del socio</td>
                <td class="text-center">
                    <input wire:model="partner_salary_in" wire:keyup="totalIncomes()" type="text" placeholder="00.00"
                           class="input w-full border flex-1 @error('partner_salary_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Alimentación</td>
                <td class="text-center">
                    <input wire:model="feeding_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('feeding_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Sueldo del cónyuge</td>
                <td class="text-center">
                    <input wire:model="spouse_salary_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('spouse_salary_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Salud</td>
                <td class="text-center">
                    <input wire:model="health_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('health_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Ganancia por el comercio</td>
                <td class="text-center">
                    <input wire:model="profit_trade_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('profit_trade_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Servicios básicos</td>
                <td class="text-center">
                    <input wire:model="basic_services_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('basic_services_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Arriendos recibidos</td>
                <td class="text-center">
                    <input wire:model="leases_received_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('leases_received_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Educación</td>
                <td class="text-center">
                    <input wire:model="education_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('education_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Pro alquiler de vehículos</td>
                <td class="text-center">
                    <input wire:model="rent_car_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('rent_car_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Transporte</td>
                <td class="text-center">
                    <input wire:model="transport_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('transport_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Terrenos</td>
                <td class="text-center">
                    <input wire:model="land_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('land_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Arriendos</td>
                <td class="text-center">
                    <input wire:model="leases_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('leases_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center">Otros Ingresos</td>
                <td class="text-center">
                    <input wire:model="other_income_in" type="text" wire:keyup="totalIncomes()" placeholder="00.00"
                           class="input w-full border flex-1 @error('other_income_in')  border-red-400 @enderror">
                </td>
                <td class="text-center">Otros Egresos</td>
                <td class="text-center">
                    <input wire:model="other_expenses_ex" type="text" wire:keyup="totalExpenses()" placeholder="00.00"
                           class="input w-full border flex-1 @error('other_expenses_ex')  border-red-400 @enderror">
                </td>
            </tr>
            <tr class="intro-x">
                <td class="text-center"  style="background: #EDF2F7"><strong>TOTALES:</strong></td>
                <td class="text-center"  style="background: #EDF2F7">
                    <input wire:model="total_in" type="text" class="input w-full border flex-1" readonly placeholder="00.00">
                </td>
                <td class="text-center"  style="background: #EDF2F7"><strong>TOTALES:</strong></td>
                <td class="text-center"  style="background: #EDF2F7">
                    <input wire:model="total_ex" type="text" class="input w-full border flex-1" readonly placeholder="00.00">
                </td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
        <button wire:click.prevent="storeStep6()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
    </div>

</div>


