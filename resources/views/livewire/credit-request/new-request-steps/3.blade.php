<div {{  $visibleFrame["3"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Información Básica del Cónyuge </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <!-- Datos Conyuge :  -->
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres<span class="text-theme-6">*</span></div>
            <input  wire:model="name_spouse" type="text" class="input w-full border flex-1" placeholder="Primero y segundo nombre">
            @error('name_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos<span class="text-theme-6">*</span></div>
            <input wire:model="last_name_spouse" type="text" class="input w-full border flex-1" placeholder="Apellido paterno y materno">
            @error('last_name_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Identificación<span class="text-theme-6">*</span></div>
            <input  wire:model="dni_spouse" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
            @error('dni_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono/Celular<span class="text-theme-6">*</span></div>
            <input wire:model="phone1_spouse" type="text" class="input w-full border flex-1" placeholder="">
            @error('phone1_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Actividad Económica<span class="text-theme-6">*</span></div>
{{--            <input wire:model="economic_activity" type="text" class="input w-full border flex-1" placeholder="">--}}
            <div class="sm:mt-2"> <select wire:model="economic_activity" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Empleado">Empleado</option>
                    <option value="Independiente">Independiente</option>
                </select> </div>
            @error('economic_activity') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tipo de Contrato<span class="text-theme-6">*</span></div>
{{--            <input wire:model="contract_type" type="text" class="input w-full border flex-1" placeholder="">--}}
            <select  wire:model="contract_type" class="input w-full border flex-1">
                <option value="">Seleccionar</option>
                <option value="Indefinido">Indefinido</option>
                <option value="Temporal">Temporal</option>
            </select>
            @error('contract_type') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Empresa Donde Labora<span class="text-theme-6">*</span> </div>
            <input wire:model="company_name" type="text" class="input w-full border flex-1" placeholder="">
            @error('company_name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Dirección de la Empresa<span class="text-theme-6">*</span> </div>
            <input wire:model="company_address" type="text" class="input w-full border flex-1" placeholder="">
            @error('company_address') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Télefono<span class="text-theme-6">*</span> </div>
            <input wire:model="company_phone" type="text" class="input w-full border flex-1" placeholder="">
            @error('company_phone') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tiempo de Servicio<span class="text-theme-6">*</span> </div>
            <input wire:model="service_time" type="text" class="input w-full border flex-1" placeholder="">
            @error('service_time') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Profesión u Oficio<span class="text-theme-6">*</span> </div>
            <input wire:model="profession_spouse" type="text" class="input w-full border flex-1" placeholder="">
            @error('profession_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Cargo Actual<span class="text-theme-6">*</span> </div>
            <input wire:model="actual_charge_spouse" type="text" class="input w-full border flex-1" placeholder="">
            @error('actual_charge_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Ingresos ($)<span class="text-theme-6">*</span> </div>
            <input wire:model="income_spouse" type="text" class="input w-full border flex-1" placeholder="">
            @error('income_spouse') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeStep3()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
