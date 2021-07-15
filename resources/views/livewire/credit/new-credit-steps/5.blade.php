<div {{  $visibleFrame["5"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
        <div class="font-medium text-base mr-auto">Anexos</div>
        <a  href="javascript:void(0);" data-toggle="modal" data-target="#attachment-modal" class="button border  items-center px-2 bg-theme-1 text-white inline-block hidden sm:flex"><span class="w-75 h-5 flex items-center justify-center"> <i class="fa fa-eye"></i>&nbsp;Ver Anexos</span></a>
    </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombre </div>
            <input wire:model="name_doc" type="text" class="input w-full border flex-1" placeholder="Ingrese el nombre">
            @error('name_doc') <span class="text-theme-6">{{$message}}</span>@enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Descripción </div>
            <input wire:model="description_doc" type="text" class="input w-full border flex-1" placeholder="Escriba una descripcion corta">
            @error('description_doc') <span class="text-theme-6">{{$message}}</span>@enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Documento </div>
            <input wire:model="url_doc" type="file" class="input w-full border flex-1" placeholder="">
            @error('url_doc') <span class="text-theme-6">{{$message}}</span>@enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado </div>
            <input wire:model="status_doc" type="checkbox" class="input input--switch border">
        </div>


        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            @if($action_doc == 'POST')
            <button wire:click.prevent="storeDoc()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
            @else
                <button wire:click.prevent="updateDoc()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Actualizar</button>
            @endif
        </div>
    </div>

    @include('modals.credits.attachment')
</div>
