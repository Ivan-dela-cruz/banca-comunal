<div>
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Registro de  socios y clientes</h2>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <button title="Presiona para limpiar los formularios" class="tooltip button text-white bg-theme-9 shadow-md mr-2">
                 <i class="fas fa-redo-alt"></i>
            </button>
            
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <input wire:keydown.enter="findMember()" wire:model="search_member" type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Buscar ">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fa fa-search" ></i>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="selectFrame({{1}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["1"]}}">1</button>
                <div class="lg:w-32 {{ $listTextFrame["1"]}}">Datos personales</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{2}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["2"]}}">2</button>
                <div class="lg:w-32  {{ $listTextFrame["2"]}}"> Datos Conyuge</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{3}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["3"]}}">3</button>
                <div class="lg:w-32  {{ $listTextFrame["3"]}}">Dirección </div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{4}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["4"]}}">4</button>
                <div class="lg:w-32  {{ $listTextFrame["4"]}}"> Referencias</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{5}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["5"]}}">5</button>
                <div class="lg:w-32  {{ $listTextFrame["5"]}}">Finalizar</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
        </div>
        @include('livewire.members.new-member-steps.1')
        @include('livewire.members.new-member-steps.2')
        @include('livewire.members.new-member-steps.3')
        @include('livewire.members.new-member-steps.4')
        @include('livewire.members.new-member-steps.5')
    </div>
</div>
