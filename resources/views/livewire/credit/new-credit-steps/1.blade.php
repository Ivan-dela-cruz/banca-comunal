<div {{  $visibleFrame["1"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
    <div class="flex items-center px-5 py-5 sm:py-3">
        <div class="font-medium text-base mr-auto">Solicititud de Crédito</div>
        <a  href="javascript:void(0);" data-toggle="modal" data-target="#request-modal" class="button border  items-center px-2 bg-theme-1 text-white inline-block hidden sm:flex"><span class="w-75 h-5 flex items-center justify-center"> <i class="fa fa-eye"></i>&nbsp;Ver Solicitudes</span></a>
    </div>
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Código </div>
            <input wire:keyup.enter="findRequest()" wire:model="code_request" type="text" class="input w-full border flex-1" placeholder="Ingrese codigo de la solicitud">
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Estado solicitud</div>
            <select  wire:model="member_type" class="input w-full border flex-1">
                <option value="">Aprobado</option>
                <option value="cliente">Anulado</option>
                <option value="socio">Revisión</option>
            </select>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Crédito </div>
            <input wire:model="credit_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('credit_req') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Monto </div>
            <input wire:model="amount_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('amount_req') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Plazo </div>
            <input wire:model="term_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('term_req') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">No. del Documento de Identidad</div>
            <input  wire:model="doc_number_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('doc_number') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Nombres </div>
            <input wire:model="name_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Apellidos </div>
            <input  wire:model="last_name_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('last_name') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Teléfono </div>
            <input  wire:model="phone_req" type="text" class="input w-full border flex-1" readonly disabled>
            @error('phone') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
            <div class="mb-2">Fecha </div>
            <input  wire:model="date_req" type="date" class="input w-full border flex-1" readonly disabled>
            @error('date_req') <li class="text-theme-6">{{$message}}</li>  @enderror
        </div>

{{--        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">--}}
{{--           --}}{{--  <a href="/nueva-solicitud" class="button w-50 justify-center block bg-theme-11 text-white ml-2">Ver solicitud</a>--}}
{{--            <a href="/nueva-solicitud" class="button w-50 justify-center block bg-theme-7 text-white ml-2">Crear solicitud</a> --}}
{{--            <button wire:click.prevent="storeFinal()" class="button w-24 justify-center block bg-theme-9 text-white ml-2">Guardar</button>--}}
{{--        </div>--}}
    </div>

    @include('modals.credits.request')
</div>
