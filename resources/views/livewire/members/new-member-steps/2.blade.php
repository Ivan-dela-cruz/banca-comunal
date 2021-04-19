<div {{  $visibleFrame["2"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Datos conyuge</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <!-- Datos Conyuge :  -->
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres</div>
            <input  wire:model="name_spouse" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos</div>
            <input wire:model="last_name_spouse" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Identificación</div>
            <input  wire:model="dni_spouse" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Pasaporte</div>
            <input wire:model="passport_spouse" type="text" class="input w-full border flex-1" placeholder="Requerido para extrajeros">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha de nacimiento </div>
            <input wire:model="birth_date_spouse" type="date" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Email </div>
            <input wire:model="email_spouse" type="text" class="input w-full border flex-1" placeholder="ejemplo@email.com">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 1 </div>
            <input wire:model="phone1_spouse" type="text" class="input w-full border flex-1" placeholder="Principal">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 2 </div>
            <input wire:model="phone2_spouse" type="text" class="input w-full border flex-1" placeholder="Secundario">
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeSpouse()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
