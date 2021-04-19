<div {{  $visibleFrame["4"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
            <div class="font-medium text-base mr-auto"> Referencias Personales</div>
            <a  href="javascript:;" data-toggle="modal" data-target="#references-modal" class="button border  items-center px-2 bg-theme-1 text-white inline-block hidden sm:flex"><span class="w-5 h-5 flex items-center justify-center"> <i data-feather="eye" class="w-4 h-4"></i> </span></a>
        </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
            <!--   Referencias personales :  -->
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Nombres</div>
                <input wire:model="name_ref" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Apellidos</div>
                <input wire:model="last_name_ref" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Identificación</div>
                <input wire:model="dni_ref" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Parentesco</div>
                <input wire:model="relationship_ref" type="text" class="input w-full border flex-1" placeholder="Nivel de parentesco">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Instrucción</div>
                <input wire:model="instruction_ref" type="text" class="input w-full border flex-1" placeholder="Nivel de educación">
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
                <div class="mb-2">Tiempo que conoce </div>
                <input wire:model="time_to_meet_ref" type="text" class="input w-full border flex-1" placeholder=" ">
            </div>
            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button wire:click.prevent="{{$action_ref === 'POST' ? 'storeReference()' : 'updateReference()'}}" class="button w-24 justify-center block bg-theme-1 text-white ml-2">{{$action_ref === 'POST' ? 'Guardar': 'Actualizar'}}</button>
                <button wire:click.prevent="resetInputFieldsRef()" class="button w-24 justify-center block bg-theme-6 text-white ml-2">Cancelar</button>
            </div>
        </div>
    @include('modals.members.references')

</div>


