<div {{  $visibleFrame["5"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
        <div class="font-medium text-base mr-auto"> Referencias Personales</div>
        <a  href="javascript:void(0);" data-toggle="modal" data-target="#references-modal" class="button border  items-center px-2 bg-theme-1 text-white inline-block hidden sm:flex"><span class="w-75 h-5 flex items-center justify-center"> <i class="fa fa-eye"></i>&nbsp;Ver Referencias</span></a>
    </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <!--   Referencias personales :  -->
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres <span class="text-theme-6">*</span></div>
            <input wire:model="name_ref" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
            @error('name_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos <span class="text-theme-6">*</span></div>
            <input wire:model="last_name_ref" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
            @error('last_name_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Identificaión <span class="text-theme-6">*</span></div>
            <input wire:model="dni_ref" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
            @error('dni_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Edad <span class="text-theme-6">*</span></div>
            <input wire:model="age_ref" type="text" class="input w-full border flex-1" placeholder="">
            @error('age_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Parentesco <span class="text-theme-6">*</span></div>
{{--            <input wire:model="relationship_ref" type="text" class="input w-full border flex-1" placeholder="Nivel de parentesco">--}}
            <select  wire:model="relationship_ref" class="input w-full border flex-1">
                <option value="">Seleccionar</option>
                <option value="Primo">Primo</option>
                <option value="Hermano">Hermano</option>
                <option value="Padre">Padre</option>
                <option value="Madre">Madre</option>
                <option value="Tío">Tío</option>
                <option value="Otro">Otro</option>
            </select>
            @error('relationship_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Instrucción <span class="text-theme-6">*</span></div>
{{--            <input wire:model="instruction_ref" type="text" class="input w-full border flex-1" placeholder="Nivel de educación">--}}
            <select  wire:model="instruction_ref" class="input w-full border flex-1">
                <option value="">Seleccionar</option>
                <option value="Básica">Básica</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Superior">Superior</option>
            </select>
            @error('instruction_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tiempo que conoce <span class="text-theme-6">*</span></div>
            <input wire:model="time_to_meet_ref" type="text" class="input w-full border flex-1" placeholder=" ">
            @error('time_to_meet_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Celular <span class="text-theme-6">*</span></div>
            <input wire:model="phone_ref" type="text" class="input w-full border flex-1" placeholder="Nivel de educación">
            @error('phone_ref') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="{{$action_ref === 'POST' ? 'storeReference()' : 'updateReference()'}}" class="button w-24 justify-center block bg-theme-1 text-white ml-2">{{$action_ref === 'POST' ? 'Guardar': 'Actualizar'}}</button>
            <button wire:click.prevent="resetInputFieldsRef()" class="button w-24 justify-center block bg-theme-6 text-white ml-2">Cancelar</button>
        </div>
    </div>
    @include('modals.members.references')

</div>


