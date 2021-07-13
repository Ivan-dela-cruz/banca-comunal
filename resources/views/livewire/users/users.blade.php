<div>
        <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">Gestión de usuarios</h2>
                <div class="hidden md:block mx-auto text-gray-600"></div>
            @can('create_user')
                <button wire:click.prevent="open()" class="btn_plus button text-white bg-theme-9 shadow-md mr-2">
                        <i class="fas fa-plus mr-1"></i>
                        Nuevo
                </button>
            @endcan
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                        <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                <input type="text" class="input w-56 box pr-10 placeholder-theme-13"
                                        placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 fas fa-search"></i>
                        </div>
                </div>
        </div>
        <div {{$visbibleForm?'hidden':''}} >
                <div  class="grid grid-cols-12 gap-6 mt-5">
                        <div class="intro-y box col-span-12 grid grid-cols-1 lg:grid-cols-2">
                                <div class="intro-y  p-5">
                                        <div>
                                                <label>Nombres</label>
                                                <input wire:model="name" type="text" class="input w-full border mt-2"
                                                        placeholder="Ingrese nombres">
                                                @error('name') <span class="text-theme-6">{{$message}}</span> @enderror
                                        </div>
                                        <div class="mt-3">
                                                <label>Género</label>
                                                <div class="mt-2">
                                                        <select wire:model="gender" class="input w-full border mt-2">
                                                                <option value="Masculino" selected>Masculino</option>
                                                                <option value="Femenino">Femenino</option>
                                                                <option value="Otro">Otro</option>
                                                        </select>
                                                </div>
                                                @error('gender') <span class="text-theme-6">{{$message}}</span> @enderror
                                        </div>
                                        <div class="mt-3">
                                                <label>Email</label>
                                                <div class="relative mt-2">
                                                        <input wire:model="email" type="text"
                                                                class="input pr-12 w-full border col-span-4"
                                                                placeholder="Ingrese correo">
                                                        @error('email') <span class="text-theme-6">{{$message}}</span> @enderror
                                                </div>
                                        </div>
                                        @if ($action!="PUT")
                                                <div class="mt-3">
                                                        <label>Contraseña</label>
                                                        <div class="relative mt-2">
                                                                <input wire:model="password" type="password"
                                                                        class="input pr-16 w-full border col-span-4"
                                                                        placeholder="Ingrese contraseña">
                                                                @error('password') <span class="text-theme-6">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                </div>
                                        @endif

                                        <div class="mt-3">
                                                <label>Imagen</label>
                                                <div class="relative mt-2">
                                                        <input wire:model="url_image" type="file"
                                                                class="input pr-12 w-full border col-span-4"
                                                                placeholder="Ingrese un télefono">
                                                </div>
                                                @error('url_image') <span class="text-theme-6">{{$message}}</span> @enderror
                                        </div>
                                </div>
                                <div class="intro-y p-5">
                                        <div>
                                                <label> Apellidos</label>
                                                <input wire:model="last_name" type="text" class="input w-full border mt-2"
                                                        placeholder="Ingrese apellidos">
                                                @error('last_name') <span class="text-theme-6">{{$message}}</span> @enderror
                                        </div>
                                        <div class="mt-3">
                                                <label>Dirección</label>
                                                <div class="relative mt-2">
                                                        <input wire:model="address" type="text"
                                                                class="input pr-12 w-full border col-span-4"
                                                                placeholder="Ingrese una dirección">
                                                        @error('address') <span class="text-theme-6">{{$message}}</span>
                                                        @enderror
                                                </div>
                                        </div>
                                        <div class="mt-3">
                                                <label>Télefono</label>
                                                <div class="relative mt-2">
                                                        <input wire:model="phone" type="text"
                                                                class="input pr-12 w-full border col-span-4"
                                                                placeholder="Ingrese un télefono">
                                                        @error('phone') <span class="text-theme-6">{{$message}}</span> @enderror
                                                </div>
                                        </div>
                                        @if ($action!="PUT")
                                                <div class="mt-3">
                                                        <label>Confirmar contraseña</label>
                                                        <div class="relative mt-2">
                                                                <input wire:model="confirm_password" type="password"
                                                                        class="input pr-16 w-full border col-span-4"
                                                                        placeholder="Repita la  contraseña">
                                                                @error('confirm_password') <span
                                                                        class="text-theme-6">{{$message}}</span> @enderror
                                                        </div>
                                                </div>
                                        @endif
                                        <div class="mt-3">
                                                <label>Estado</label>
                                                <div class="mt-2">
                                                        <input wire:model="status" type="checkbox"
                                                                class="input input--switch border">
                                                </div>
                                                @error('status') <span class="text-theme-6">{{$message}}</span> @enderror
                                        </div>
                                        <div class="text-right mt-5">
                                                <button wire:click.prevent="resetFields()" type="button"
                                                        class="btn_cancel button w-24 border bg-theme-6 text-white dark:border-dark-5 text-white dark:text-white mr-1">Cancelar</button>
                                                @if ($action=="PUT")
                                                    @can('update_user')
                                                        <button wire:click.prevent="update()" type="button"
                                                                class="button w-24 bg-theme-1 text-white">Actualizar</button>
                                                    @endcan
                                                @else
                                                    @can('create_user')
                                                    <button wire:click.prevent="store()" type="button"
                                                            class="button w-24 bg-theme-1 text-white">Guardar</button>
                                                    @endcan
                                                @endif
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                                <thead>
                                        <tr>
                                                <th class="whitespace-no-wrap">Imagen</th>
                                                <th class="whitespace-no-wrap">Usuario</th>
                                                <th class="text-center whitespace-no-wrap">Dirección</th>
                                                <th class="text-center whitespace-no-wrap">Télefono</th>
                                                <th class="text-center whitespace-no-wrap">Estado</th>
                                                <th class="text-center whitespace-no-wrap">Acciones</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        @foreach ($users as $us)
                                        <tr class="intro-x">
                                                <td class="w-40">
                                                        <div class="flex">
                                                                <div class="w-10 h-10 image-fit zoom-in">
                                                                        <img alt="No found"
                                                                                class="tooltip rounded-full"
                                                                                src="{{ asset($us->url_image) }}"
                                                                                >
                                                                </div>
                                                        </div>
                                                </td>
                                                <td>
                                                        <a href="javascript:;"
                                                                class="font-medium whitespace-no-wrap"> {{ $us->last_name }}  {{ $us->name }}</a>
                                                        <div class="text-gray-600 text-xs whitespace-no-wrap">
                                                                {{ $us->email }}</div>
                                                </td>
                                                <td class="text-center">{{ $us->address}}</td>
                                                <td class="w-40"> {{ $us->phone }} </td>
                                                <td class="text-center w-40">
                                                        <span class="text-xs px-1 rounded-full {{ $us->status?'bg-theme-9':'bg-theme-6' }} text-white mr-1">
                                                                {{ $us->status?"Activo":"Inactivo" }}
                                                        </span>
                                                </td>
                                                <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            @can('update_user')
                                                                <a wire:click.prevent="edit({{ $us->id }})" class="flex items-center mr-3" href="javascript:;">
                                                                        <i class="fas fa-edit w-4 h-4 mr-1"></i>
                                                                </a>
                                                            @endcan
                                                            @can('destroy_user')
                                                                <a wire:click.prevent="delete({{ $us->id }})" href="javascript:;"
                                                                        class="flex items-center {{ $us->status?'text-theme-6':'text-theme-9' }}">
                                                                        <i class="fas {{ $us->status?'fas fa-exchange-alt':'fas fa-redo-alt' }} w-4 h-4 mr-1"></i>
                                                                </a>
                                                            @endcan
                                                        </div>
                                                </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                        </table>
                </div>
                <!-- END: Data List -->
                <!-- BEGIN: Pagination -->
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                        <ul class="pagination">
                                <li>
                                        <a class="pagination__link" href="">
                                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                        </a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">
                                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                                        </a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">...</a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">1</a>
                                </li>
                                <li>
                                        <a class="pagination__link pagination__link--active" href="">2</a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">3</a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">...</a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">
                                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                                        </a>
                                </li>
                                <li>
                                        <a class="pagination__link" href="">
                                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                        </a>
                                </li>
                        </ul>
                        <select class="w-20 input box mt-3 sm:mt-0">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                        </select>
                </div>
                <!-- END: Pagination -->
        </div>
</div>
