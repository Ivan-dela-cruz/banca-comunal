<div  {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="font-medium text-base">Información del Crédito</div>
    <input hidden wire:model="member_id" type="text" class="input w-full border flex-1" placeholder="">
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Código<span class="text-theme-6">*</span></div>
            <input disabled wire:model="code" type="text" class="input w-full border flex-1" placeholder="">
            @error('code') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Crédito <span class="text-theme-6">*</span></div>
{{--            <input  type="text" class="input w-full border flex-1" placeholder="Nuevo o Refinanciación">--}}

            <div class="sm:mt-2">
                <select wire:model="credit_type" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Refinanciación">Refinanciación</option>
                </select> </div>
            @error('credit_type') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2 ">Nombre del Deudor<span class="text-theme-6">*</span></div>
            <input  wire:model="name_debtor" type="text" class="input w-full border flex-1 {{ $name_debtor !=""?'border-theme-10':'' }}" placeholder="Nombres y Apellidos">
            @error('name_debtor') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">N° C.I. <span class="text-theme-6">*</span> <small class="text-muted">&nbsp;(Buscar Socio)</small></div>
            <input wire:keydown.enter="findMember()"  wire:model="dni_debtor" type="text" class="input w-full border flex-1" placeholder="Cédula de identidad">
            @error('dni_debtor') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Monto Solicitado($) <span class="text-theme-6">*</span></div>
            <input  wire:model="amount" type="text" class="input w-full border flex-1" placeholder="">
            @error('amount') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Se va a invertir en <span class="text-theme-6">*</span></div>
            <input  wire:model="reason_invest" type="text" class="input w-full border flex-1" placeholder="">
            @error('reason_invest') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Pago (Estimado) <span class="text-theme-6">*</span></div>
            <input  wire:model="pay" type="text" class="input w-full border flex-1" placeholder="">
            @error('pay') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Plazo (Meses) <span class="text-theme-6">*</span></div>
            <select wire:model="deadline" name="deadline" class="input w-full border flex-1">
                <option value="1">1   Mes</option>
                <option value="2">2   Meses</option>
                <option value="3">3   Meses</option>
                <option value="4">4   Meses</option>
                <option value="5">5   Meses</option>
                <option value="6">6   Meses</option>
                <option value="7">7   Meses</option>
                <option value="8">8   Meses</option>
                <option value="9">9   Meses</option>
                <option value="10">10  Meses</option>
                <option value="11">11  Meses</option>
                <option value="12">12  Meses</option>
                <option value="13">13  Meses</option>
                <option value="14">14  Meses</option>
                <option value="15">15  Meses</option>
                <option value="16">16  Meses</option>
                <option value="17">17  Meses</option>
                <option value="18">18  Meses</option>
                <option value="19">19  Meses</option>
                <option value="20">20  Meses</option>
                <option value="21">21  Meses</option>
                <option value="22">22  Meses</option>
                <option value="23">23  Meses</option>
                <option value="24">24  Meses</option>
            </select>
            @error('deadline') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Tipos de  Coutas <span class="text-theme-6">*</span></div>
            <div class="sm:mt-2">
                <select wire:model="variable_fee" class="input w-full border flex-1">
                    <option value="0">Fija</option>
                   {{--  <option value="1">Variable</option> --}}
                </select>
            </div>

            @error('variable_fee') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Segmento de Crédito <span class="text-theme-6">*</span></div>
{{--            <input  wire:model="credit_segment" type="text" class="input w-full border flex-1" placeholder="">--}}
{{--            @error('credit_segment') <li class="text-theme-6">{{$message}}</li>  @enderror--}}
            <div class="sm:mt-2"> <select wire:model="credit_segment" class="input w-full border flex-1">
                    <option value="">Seleccione</option>
                    <option value="Microcrédito">Microcrédito</option>
                    <option value="Consumo">Consumo</option>
                    <option value="Inversión">Inversión</option>
                    <option value="Vivienda">Vivienda</option>
                </select> </div>
            @error('credit_segment') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeStep1()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
        </div>
    </div>
</div>
