<div {{  $visibleFrame["5"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base"> Detalle final</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado de crédito</div>
            <select  wire:model="member_type" class="input w-full border flex-1">
                <option value="">Selecciona</option>
                <option value="cliente">Aprobado</option>
                <option value="socio">Revisión</option>
                <option value="socio fundador">Anulado</option>
            </select>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Número de cuenta </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Monto del crédito </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Valor de coutas </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Total de coutas </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha primer pago </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
