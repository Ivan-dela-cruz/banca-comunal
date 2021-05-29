<div>
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Nuevo crédito</h2>
    </div>
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="selectFrame({{1}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["1"]}}">1</button>
                <div class="lg:w-32 {{ $listTextFrame["1"]}}">Solicitud</div>
            </div>
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button wire:click="selectFrame({{2}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["2"]}}">2</button>
                <div class="lg:w-32 {{ $listTextFrame["2"]}}">Visita</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{3}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["3"]}}">3</button>
                <div class="lg:w-32  {{ $listTextFrame["3"]}}"> Amortización</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{4}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["4"]}}">4</button>
                <div class="lg:w-32  {{ $listTextFrame["4"]}}"> Finalizar</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button  wire:click="selectFrame({{5}})" class="w-10 h-10 rounded-full {{ $listButtonFrame["5"]}}">5</button>
                <div class="lg:w-32  {{ $listTextFrame["5"]}}">Anexos</div>
            </div>
            <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
        </div>
        @include('livewire.credit.new-credit-steps.1')
        @include('livewire.credit.new-credit-steps.2')
        @include('livewire.credit.new-credit-steps.3')
        @include('livewire.credit.new-credit-steps.4')
        @include('livewire.credit.new-credit-steps.5')
    </div>
</div>
