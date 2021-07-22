<div>
    <h2 class="intro-y text-lg font-medium mt-10">Solicitud de Credito</h2>
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="selectFrame({{1}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["1"]}}">1
                </button>
                <div class="lg:w-32">Información del Crédito</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{2}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["2"]}}">2
                </button>
                <div class="lg:w-32">Solicitante</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{3}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["3"]}}">3
                </button>
                <div class="lg:w-32">Cónyuge </div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{4}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["4"]}}">4
                </button>
                <div class="lg:w-32">Negocio o Actividad</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{5}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["5"]}}">5
                </button>
               <div class="lg:w-32">Refrencias</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{6}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["6"]}}">6
                </button>
                <div class="lg:w-32">Situación Ecónomica</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button wire:click="selectFrame({{7}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["7"]}}">7
                </button>
                <div class="lg:w-32">Croquis</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
        </div>
        @include('livewire.credit-request.new-request-steps.1')
        @include('livewire.credit-request.new-request-steps.2')
        @include('livewire.credit-request.new-request-steps.3')
        @include('livewire.credit-request.new-request-steps.4')
        @include('livewire.credit-request.new-request-steps.5')
        @include('livewire.credit-request.new-request-steps.6')
        @include('livewire.credit-request.new-request-steps.7')
    </div>

    @section('map-script')
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY_2V-J-h-ePbRzXc0M9tU3xzX1c7YF1U&callback=initMap&libraries=&v=weekly"
            async
        ></script>

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

</div>
