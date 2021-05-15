<div {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base"> Solicititud de Crédito</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Código </div>
            <input wire:model="acount_number" type="text" class="input w-full border flex-1" placeholder="Ingrese codigo de la solicitud">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado solicitud</div>
            <select  wire:model="member_type" class="input w-full border flex-1">
                <option value="">Aprobado</option>
                <option value="cliente">Anulado</option>
                <option value="socio">Revisión</option>
            </select>
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <a href="/nueva-solicitud" class="button w-50 justify-center block bg-theme-11 text-white ml-2">Ver solicitud</a>
            <a href="/nueva-solicitud" class="button w-50 justify-center block bg-theme-7 text-white ml-2">Crear solicitud</a>
            <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-9 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
