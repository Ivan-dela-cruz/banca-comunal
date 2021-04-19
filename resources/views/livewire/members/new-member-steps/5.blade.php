<div {{  $visibleFrame["5"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base"> Referencias personales</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tipo de socio</div>
            <select  wire:model="member_type" class="input w-full border flex-1">
                <option value="">Selecciona</option>
                <option value="cliente">Cliente</option>
                <option value="socio">Socio</option>
                <option value="socio fundador">Socio Fundador</option>
            </select>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Número de cuenta </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado </div>
            <div class="mt-2">
                <input wire:model="status" type="checkbox" class="input input--switch border">
            </div>
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
