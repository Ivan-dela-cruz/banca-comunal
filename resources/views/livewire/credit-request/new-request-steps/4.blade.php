<div {{  $visibleFrame["4"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
        <div class="font-medium text-base mr-auto">Datos de Negocio o Actividad</div>
{{--        <a  href="javascript:void(0);" data-toggle="modal" data-target="#references-modal" class="button border  items-center px-2 bg-theme-1 text-white inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i class="fa fa-eye"></i> </span></a>--}}
    </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <!--   Referencias personales :  -->
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombre del Negocio o Razón Social<span class="text-theme-6">*</span></div>
            <input wire:model="business_name" type="text" class="input w-full border flex-1" placeholder="">
            @error('business_name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">R.U.C.<span class="text-theme-6">*</span></div>
            <input wire:model="ruc" type="text" class="input w-full border flex-1" placeholder="">
            @error('ruc') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Antgüedad del Negocio<span class="text-theme-6">*</span></div>
            <input wire:model="business_age" type="text" class="input w-full border flex-1" placeholder="">
            @error('business_age') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Lugar de Ventas<span class="text-theme-6">*</span></div>
{{--            <input wire:model="sales_place" type="text" class="input w-full border flex-1" placeholder="">--}}
            <div class="sm:mt-2"> <select wire:model="sales_place" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Local">Local</option>
                    <option value="Ambulante">Ambulante</option>
                </select> </div>
            @error('sales_place') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Local es<span class="text-theme-6">*</span></div>
{{--            <input wire:model="local_type" type="text" class="input w-full border flex-1" placeholder="">--}}
            <div class="sm:mt-2"> <select wire:model="local_type" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Propio">Propio</option>
                    <option value="Arriendo">Arriendo</option>
                    <option value="Familiares">Familiares</option>
                    <option value="Otro">Otro</option>
                </select> </div>
            @error('local_type') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tiempo de Negocio<span class="text-theme-6">*</span></div>
            <input wire:model="business_time" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('business_time') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Dirección del Negocio<span class="text-theme-6">*</span></div>
            <input wire:model="business_address" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('business_address') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Calles<span class="text-theme-6">*</span></div>
            <input wire:model="streets" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('streets') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Número<span class="text-theme-6">*</span></div>
            <input wire:model="number" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('number') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Referencia del sitio del negocio<span class="text-theme-6">*</span></div>
            <input wire:model="business_reference" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('business_reference') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeStep4()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>

            {{--            <button wire:click.prevent="{{$action_deal === 'POST' ? 'storeReference()' : 'updateReference()'}}" class="button w-24 justify-center block bg-theme-1 text-white ml-2">{{$action_deal === 'POST' ? 'Guardar': 'Actualizar'}}</button>--}}
{{--            <button wire:click.prevent="resetInputFieldsRef()" class="button w-24 justify-center block bg-theme-6 text-white ml-2">Cancelar</button>--}}
        </div>
    </div>
{{--    @include('modals.members.references')--}}

</div>


