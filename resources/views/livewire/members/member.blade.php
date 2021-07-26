<div>
    <h2 class="intro-y text-lg font-medium mt-10">Listado de miembros</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">

            @can('create_client')
            <a class="button text-white bg-theme-1 shadow-md mr-2">Agregar nuevo</a>
            @endcan

            <div class="hidden md:block mx-auto text-gray-600"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Buscar...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fas fa-search"></i>
                </div>
            </div>
                <button class="ml-3 button box flex items-center text-gray-700 dark:text-gray-300" wire:click="print()">
                    <i class="hidden sm:block w-4 h-4 mr-2 fas fa-file"></i> Generar PDF
                </button>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($members as $member)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            <div class="w-16 h-16 image-fit">
                                <img alt="Image" class="rounded-md" src="{{ asset($member->url_image) }}">
                            </div>
                            <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">{{ $member->name }} {{ $member->last_name }}</a>
                                <div class="text-gray-600 text-xs">{{ $member->doc_number }}</div>
                            </div>
                        </div>
                        <div class="absolute right-0 top-0 dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700 dark:text-gray-300"></i>
                            </a>
                            <div class="dropdown-box w-40">
                                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                    @can('update_client')
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Editar
                                        </a>
                                    @endcan
                                    @can('destroy_client')
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Deshabilitar
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center lg:text-left p-5">
                        <div> <b>Cuenta: </b> {{  $member->account_number }}</div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5">
                            <i data-feather="mail" class="w-3 h-3 mr-2"></i> {{ $member->email }}
                        </div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1">
                            <i data-feather="instagram" class="w-3 h-3 mr-2"></i> {{ $member->phone1 }}
                        </div>
                    </div>
                    <div class="text-center lg:text-right p-5 border-t border-gray-200 dark:border-dark-5">
                        <a href="/perfil/{{$member->id}}" class="button button--sm text-white bg-theme-1 mr-2">Ver perfil</a>
{{--                        <button class="button button--sm text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300">Reporte</button>--}}
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                {{ $members->links('livewire.pagination')}}
                <select class="w-20 input box mt-3 sm:mt-0" wire:model="perPage">
                    <option value="6">6</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="35">35</option>
                    <option value="50">50</option>
                </select>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
