<div>
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">Roles & Permisos</h2>
            <div class="intro-y box bg-theme-1 p-5 mt-6">
                <div class="border-t border-theme-3 dark:border-dark-5 mt-2 pt-2 text-white">
                    @foreach($roles as $role)
                        <div class="w-full sm:w-auto flex ">
                            @can('update_role')
                                <a href="javascript:void(0);"  wire:click.prevent="edit({{ $role->id }})"
                                    class="flex items-center px-0 py-2 rounded-md truncate">
                                    <span class="w-5 h-5 flex items-center justify-center">
                                        <i class="w-4 h-4 md:text-green-600 fas fa-pen" ></i>
                                    </span>
                                </a>
                            @endcan
                            @if ($role->id > 2)
                                @if($confirming===$role->id)
                                    @can('destroy_role')
                                        <a href="javascript:void(0);"  wire:click.prevent="delete({{ $role->id }})"
                                        class="flex items-center px-0 py-2 rounded-md truncate">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i class="w-4 h-4 md:text-red-600 fas fa-check-double"></i>
                                            </span>
                                        </a>
                                    @endcan
                                @else
                                    @can('destroy_role')
                                        <a href="javascript:void(0);"  wire:click.prevent="confirmDelete({{ $role->id }})"
                                        class="flex items-center px-0 py-2 rounded-md truncate">
                                            <span class="w-5 h-5 flex items-center justify-center">
                                                <i class="w-4 h-4 md:text-yellow-600 fas fa-trash-alt"></i>
                                            </span>
                                        </a>
                                    @endcan
                                @endif
                            @else
                            <a href="javascript:void(0);"
                                class="flex items-center px-0 py-2 rounded-md truncate">
                                    <span class="w-5 h-5 flex items-center justify-center">
                                    </span>
                                </a>
                            @endif
                            <a href="javascript:void(0);" class="flex items-center px-3 py-2 truncate" >
                                <div class="w-2 h-2 {{ $role->status?'bg-theme-9':'bg-theme-12'}} rounded-full mr-3"></div> {{ $role->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700 dark:text-gray-300 fas fa-search" ></i>
                    <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13" placeholder="Search mail">
                </div>
                <div class="w-full sm:w-auto flex">
                    <div class="dropdown">
                        @if($action=='POST')
                            @can('create_role')
                            <button wire:click.prevent="store()" class="dropdown-toggle button px-2 box text-green-700 dark:text-green-300">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4 fas fa-check"></i>
                                </span>
                            </button>
                            @endcan
                            <button  wire:click.prevent="resetInputFields()" class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4 fas fa-plus"></i>
                                </span>
                            </button>
                        @else
                            @can('update_role')
                            <button   wire:click.prevent="update()"  class="dropdown-toggle button px-2 box text-yellow-700 dark:text-yellow-700">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4 fas fa-sync-alt"></i>
                                </span>
                            </button>
                            @endcan
                            <button  wire:click.prevent="resetInputFields()"  class="dropdown-toggle button px-2 box text-red-700 dark:text-red-300">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4 fas fa-times"></i>
                                </span>
                            </button>
                        @endif
                        
                        
                    </div>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label>Nombre</label>
                    <input  wire:model="name" type="text" class="input w-full border mt-2" placeholder="Ingrese un nombre">
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label>Descripción</label>
                    <input  wire:model="description" type="text" class="input w-full border mt-2" placeholder="Ingrese una descripción">
                    @error('description')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label>Estado</label>
                    <div class="mt-2">
                        <input wire:model="status"  type="checkbox" class="input input--switch border">
                    </div>
                    @error('status')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- END: Form Layout -->
                <div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200 dark:border-dark-1">
                    <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                        <input class="input border border-gray-500" type="checkbox">
                        <div class="dropdown ml-1" data-placement="bottom-start">
                            <a class="dropdown-toggle w-5 h-5 block dark:text-gray-300" href="javascript:;">
                                <i data-feather="chevron-down" class="w-5 h-5"></i>
                            </a>
                            <div class="dropdown-box w-32">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Todos</a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Ninguno</a>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" class="w-auto h-5 ml-5 flex items-center justify-center dark:text-gray-300">
                            Listado de permisos activos
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">MODULOS</th>
                                <th class="text-center whitespace-no-wrap">CREAR</th>
                                <th class="text-center whitespace-no-wrap">LEER</th>
                                <th class="text-center whitespace-no-wrap">ACTUALIZAR</th>
                                <th class="text-center whitespace-no-wrap">ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $k => $v)
                                <tr>
                                    <td>
                                        <a href="" class="font-medium whitespace-no-wrap">{{$k}}</a>
                                    </td>
                                    @foreach($v as $p)
                                        @if($action=='PUT')
                                            <td class="text-center">
                                                <input class="input flex-none border border-gray-500"
                                                wire:model='select_permissions.{{ $p->id}}' type="checkbox"
                                                    @if ($role->id==1 || $p->id <= 4) onclick="this.checked=!this.checked;"@endif
                                                    name="select_permissions[]"
                                                    value="{{$p->id}}">
                                            </td>
                                        @else
                                            <td class="text-center">
                                                <input class="input flex-none border border-gray-500"
                                                wire:model='select_permissions.{{ $p->id}}'
                                                @if ($p->id<=4) onclick="this.checked=!this.checked;"@endif
                                                type="checkbox" name="select_permissions[]"
                                                value="{{$p->id}}">
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
