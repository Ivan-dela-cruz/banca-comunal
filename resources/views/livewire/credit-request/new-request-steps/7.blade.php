<div {{  $visibleFrame["7"]?'':'hidden' }} class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
{{--    <div class="font-medium text-base">Croquis Vivienda/Croquis Comercio</div>--}}

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
                        <input  wire:model="url_living" type="file" class="input w-full border flex-1">
                        @error('url_living') <li class="text-theme-6">{{$message}}</li>  @enderror
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
                        <input  wire:model="url_commerce" type="file" class="input w-full border flex-1">
                        @error('url_commerce') <li class="text-theme-6">{{$message}}</li>  @enderror
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5" {{$check_commerce === false ? '' : 'hidden'}}>
                    <div wire:ignore id="mapCommerce" class="report-maps"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
        <button wire:click.prevent="storeStep7()" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Guardar</button>
    </div>
</div>

@section('map-head')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
        let mapLiving, mapCommerce;
        let markersLiving = [], markersCommerce = [];
        let initLatLng = {lat: -0.93521, lng: -78.61554};

        function initMap() {
            mapLiving = new google.maps.Map(document.getElementById("mapLiving"), {
                zoom: 8,
                center: initLatLng,
            });
            mapCommerce = new google.maps.Map(document.getElementById("mapCommerce"), {
                zoom: 8,
                center: initLatLng,
            });

            // Configure the click listener.
            mapLiving.addListener("click", (event) => {
                let latlng = event.latLng.toJSON();
                let {lat, lng} = latlng;
                console.log('LIVING',latlng);

                deleteMarkers(markersLiving);
                addMarker(event.latLng, mapLiving, markersLiving);

                //enviar datos al backend
            @this.set('living_place_lat', lat);
            @this.set('living_place_lng', lng);
            });
            mapCommerce.addListener("click", (event) => {
                let latlng = event.latLng.toJSON();
                let {lat, lng} = latlng;
                console.log('COMMERCE',latlng);

                deleteMarkers(markersCommerce);
                addMarker(event.latLng, mapCommerce, markersCommerce);

                //enviar datos al backend
            @this.set('commerce_lat', lat);
            @this.set('commerce_lng', lng);
            });


        }

        function addMarker(location, map, markerL) {
            const marker = new google.maps.Marker({
                position: location,
                map: map,
            });
            markerL.push(marker);
        }

        function setMapOnAll(map, marker) {
            for (let i = 0; i < marker.length; i++) {
                marker[i].setMap(map);
            }
        }

        function deleteMarkers(markers) {
            setMapOnAll(null, markers);
            markers = [];
        }

    </script>
@endsection
@section('map-script')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsOiysBXKLrpekzOv7YtPlevaZyCVACag&callback=initMap&libraries=&v=weekly"
        async
    ></script>
@endsection





