<div class="w-full sm:w-auto flex">
    <div class="dropdown">
        @if($action=='POST')
            @can('create_role')
            <button wire:click.prevent="store()" class="dropdown-toggle button px-2 box text-green-700 dark:text-green-300">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-feather="save"></i>
                </span>
            </button>
            @endcan
        @else
            @can('update_role')
            <button   wire:click.prevent="update()"  class="dropdown-toggle button px-2 box text-red-700 dark:text-red-300">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-feather="save"></i>
                </span>
            </button>
            @endcan
        @endif
        <button  wire:click.prevent="resetInputFields()"  class="dropdown-toggle button px-2 box text-red-700 dark:text-red-300">
            <span class="w-5 h-5 flex items-center justify-center">
                <i class="w-4 h-4" data-feather="x"></i>
            </span>
        </button>
        <button  wire:click.prevent="resetInputFields()" class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
            <span class="w-5 h-5 flex items-center justify-center">
                <i class="w-4 h-4" data-feather="plus"></i>
            </span>
        </button>
    </div>
</div>