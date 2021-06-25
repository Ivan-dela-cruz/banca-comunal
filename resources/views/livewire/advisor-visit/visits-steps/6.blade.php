<div
    {{  $visibleFrame["6"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">

    <div class="grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Croquis Vivienda</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">{{$check_living === true ? 'Mapa' : 'Foto'}}</div>
                        <input wire:model="check_living" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 visible" {{$check_living === true ? '' : 'hidden'}}>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <input wire:model="url_living" type="file" class="input w-full border flex-1">
                        @error('url_living')
                        <li class="text-theme-6">{{$message}}</li> @enderror
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 visible" {{$check_living === false ? '' : 'hidden'}}>
                    <div wire:ignore id="mapLiving" class="report-maps"></div>
                </div>

            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Croquis Comercio</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <div class="mr-3">{{$check_commerce === true ? 'Mapa' : 'Foto'}}</div>
                        <input wire:model="check_commerce" class="show-code input input--switch border" type="checkbox">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 visible" {{$check_commerce === true ? '' : 'hidden'}}>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <input wire:model="url_commerce" type="file" class="input w-full border flex-1">
                        @error('url_commerce')
                        <li class="text-theme-6">{{$message}}</li> @enderror
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5" {{$check_commerce === false ? '' : 'hidden'}}>
                    <div wire:ignore id="mapCommerce" class="report-maps"></div>
                </div>
            </div>
        </div>
    </div>

    @if($action === 'PUT')
        <input type="hidden" id="txtLatLiving"
               value="{{is_null($living_place_lat_edit) ? $living_place_lat : $living_place_lat_edit}}">
        <input type="hidden" id="txtLngLiving"
               value="{{is_null($living_place_lng_edit) ? $living_place_lng : $living_place_lng_edit}}">

        <input type="hidden" id="txtLatCommerce"
               value="{{is_null($commerce_lat_edit) ? $commerce_lat : $commerce_lat_edit}}">
        <input type="hidden" id="txtLngCommerce"
               value="{{is_null($commerce_lng_edit) ? $commerce_lng : $commerce_lng_edit}}">
    @endif
    <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            <button wire:click.prevent="storeStep6()"
                    class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar
            </button>
        </div>
    </div>
    {{--    @include('modals.members.references')--}}

</div>




