<div {{  $visibleFrame["2"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Información Básica del Solicitante</div>
    <input hidden wire:model="member_id" type="text" class="input w-full border flex-1" placeholder="">
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tipo de Documento de Identidad <span class="text-theme-6">*</span></div>
{{--            <input wire:model="doc_type" type="text" class="input w-full border flex-1" placeholder="Ceédula o Pasaporte">--}}
            <div class="sm:mt-2"> <select wire:model="doc_type" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Cédula">Cédula</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select> </div>
            @error('doc_type') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">No. del Documento de Identidad<span class="">*</span></div>
            <input  wire:model="doc_number" type="text" class="input w-full border flex-1 {{ $doc_number!=''?'border-theme-10':'' }}" placeholder="">
            @error('doc_number') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Nombres <span class="">*</span></div>
            <input wire:model="name" type="text" class="input w-full border flex-1 {{ $name!=''?'border-theme-10':'' }}" placeholder="Primero y segundo nombre">
            @error('name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Apellidos <span class="">*</span></div>
            <input  wire:model="last_name" type="text" class="input w-full border flex-1 {{ $last_name!=''?'border-theme-10':'' }}" placeholder="Apellido paterno y materno">
            @error('last_name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Instrucción <span class="">*</span></div>
{{--            <input  wire:model="instruction" type="text" class="input w-full border flex-1" placeholder="Instrucción">--}}
            <select  wire:model="instruction" class="input w-full border flex-1 {{ $instruction!=''?'border-theme-10':'' }}">
                <option value="">Seleccionar</option>
                <option value="Básica">Básica</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Superior">Superior</option>
            </select>
            @error('instruction') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Lugar de Nacimiento </div>
            <input  wire:model="birth_place" type="text" class="input w-full border flex-1 {{ $birth_place=''?'border-theme-10':'' }}" placeholder="">
            @error('birth_place') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">País <span class="">*</span></div>
            <input  wire:model="country" type="text" class="input w-full border flex-1" placeholder="">
            @error('country') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Fecha de Nacimiento </div>
            <input  wire:model="birth_date" type="date" class="input w-full border flex-1 {{ $birth_date!=''?'border-theme-10':'' }}" placeholder="">
            @error('birth_date') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado Civil <span class="">*</span></div>
{{--            <input wire:model="marital_status" type="text" class="input w-full border flex-1" placeholder="">--}}
            <select  wire:model="marital_status" class="input w-full border flex-1 {{ $marital_status!=''?'border-theme-10':'' }}">
                <option value="">Seleccionar</option>
                <option value="Casado">Casado</option>
                <option value="Viudo">Viudo</option>
                <option value="Soltero">Soltero</option>
                <option value="Divorciado">Divorciado</option>
            </select>
            @error('marital_status') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Sexo <span class="">*</span></div>
{{--            <input  wire:model="gender" type="text" class="input w-full border flex-1" placeholder="">--}}
            <div class="sm:mt-2 "> <select wire:model="gender" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select> </div>
            @error('gender') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Direccion de la Residencia <span class="">*</span></div>
            <input  wire:model="residence_address" type="text" class="input w-full border flex-1 {{ $residence_address=''?'border-theme-10':'' }}" placeholder="">
            @error('residence_address') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeStep2()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
