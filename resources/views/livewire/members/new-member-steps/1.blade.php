<div {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Datos personales</div>
    <input hidden wire:model="member_id" type="text" class="input w-full border flex-1" placeholder="">
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres <span class="text-theme-6">*</span></div>
            <input wire:model="name" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
            @error('name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos <span class="text-theme-6">*</span></div>
            <input  wire:model="last_name" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
            @error('last_name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Identificación <span class="text-theme-6">*</span></div>
            <input   wire:model="dni" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
            @error('dni') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Pasaporte</div>
            <input  wire:model="passport" type="text" class="input w-full border flex-1" placeholder="Requerido para extrajeros">
            @error('passport') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Instruccción <span class="text-theme-6">*</span></div>
{{--            <input  wire:model="instruction" type="text" class="input w-full border flex-1" placeholder="Nivel educativo">--}}
            <select  wire:model="instruction" class="input w-full border flex-1">
                <option value="">Seleccionar</option>
                <option value="Básica">Básica</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Superior">Superior</option>
            </select>
            @error('instruction') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado cívil <span class="text-theme-6">*</span></div>
{{--            <input  wire:model="marital_status" type="text" class="input w-full border flex-1" placeholder="">--}}
            <select  wire:model="marital_status" class="input w-full border flex-1">
                <option value="">Seleccionar</option>
                <option value="Casado">Casado</option>
                <option value="Viudo">Viudo</option>
                <option value="Soltero">Soltero</option>
                <option value="Divorciado">Divorciado</option>
            </select>
            @error('marital_status') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha de nacimiento <span class="text-theme-6">*</span></div>
            <input wire:model="birth_date" type="date" class="input w-full border flex-1" placeholder="">
            @error('birth_date') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Email <span class="text-theme-6">*</span></div>
            <input  wire:model="email" type="text" class="input w-full border flex-1" placeholder="ejemplo@email.com">
              @error('email') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 1 <span class="text-theme-6">*</span></div>
            <input  wire:model="phone1" type="text" class="input w-full border flex-1" placeholder="Principal">
              @error('phone1') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono 2 </div>
            <input  wire:model="phone2" type="text" class="input w-full border flex-1" placeholder="Secundario">
              @error('phone2') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fotografía </div>
            <div class="flex items-stretch">
            {{-- @if($url_image == null)
                <img src="{{asset('images/user.jpg')}}" alt="image"
                    class="py-1 mr-2"
                    style="width:45px; height:45px;">
            @else
                @if($temporaryUrl)
                    <img src="{{$url_image->temporaryUrl()}}" alt="image"
                    class="py-1 mr-2"
                    style="width:45px; height:45px;">
                @else
                    <img src="{{asset($url_image)}}" alt="image"
                    class="py-1 mr-2"
                    style="width:45px; height:45px;">
                @endif

            @endif --}}
                <input wire:model="url_image" type="file" class="input w-full border flex-1"
                accept="image/png,image/jpg,image/jpeg" wire:click="tempUrl()">
                @error('url_image')
                <li class="text-theme-6">{{$message}}</li> @enderror
            </div>

        </div>


        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storePersonal()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
