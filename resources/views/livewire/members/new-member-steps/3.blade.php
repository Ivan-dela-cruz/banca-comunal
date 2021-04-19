<div {{  $visibleFrame["3"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Lugar de residencia</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <!--  Lugar de residencia :  -->
        <div class="intro-y col-span-12 sm:col-span-6">
            <div  class="mb-2">Ciudad </div>
            <input wire:model="city" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Cantón </div>
            <input  wire:model="canton" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Parroquia </div>
            <input  wire:model="parish" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Calle principal </div>
            <input wire:model="principal_street" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Calle secundaria </div>
            <input wire:model="secundary_street" type="text" class="input w-full border flex-1" placeholder="">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Referencia del lugar </div>
            <textarea wire:model="reference_place" type="text" class="input w-full border flex-1" placeholder=""></textarea>
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeAddress()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
