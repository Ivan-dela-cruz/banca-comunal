<div {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Datos personales</div>
    <input hidden wire:model="member_id" type="text" class="input w-full border flex-1" placeholder="">
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres</div>
            <input wire:model="name" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos</div>
            <input  wire:model="last_name" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Identificación</div>
            <input wire:keydown.enter="findMember()"  wire:model="dni" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Pasaporte</div>
            <input  wire:model="passport" type="text" class="input w-full border flex-1" placeholder="Requerido para extrajeros">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Instruccción </div>
            <input  wire:model="instruction" type="text" class="input w-full border flex-1" placeholder="Nivel educativo">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado cívil </div>
            <input  wire:model="marital_status" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha de nacimiento </div>
            <input wire:model="birth_date" type="date" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Email </div>
            <input  wire:model="email" type="text" class="input w-full border flex-1" placeholder="ejemplo@email.com">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 1 </div>
            <input  wire:model="phone1" type="text" class="input w-full border flex-1" placeholder="Principal">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 2 </div>
            <input  wire:model="phone2" type="text" class="input w-full border flex-1" placeholder="Secundario">
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storePersonal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
