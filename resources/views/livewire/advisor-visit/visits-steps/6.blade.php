<div {{  $visibleFrame["6"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Croquis Vivienda/Croquis Comercio</div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">

        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeSpouse()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
    {{--    @include('modals.members.references')--}}

</div>


