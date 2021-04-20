<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- END: CSS Assets-->

    @livewireStyles

</head>
<!-- END: Head -->

<body class="app">

@section('head')
@yield('subhead')
@endsection

    <div class="flex">

        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="User" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="hidden xl:block text-white text-lg ml-3">
                    Mid<span class="font-medium">one</span>
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <nav class="side-nav">

                <ul>
                    <li>
                        <a href="" class="side-menu {{ (request()->is('dashboard')) ? 'side-menu--active' : '' }} ">
                            <div class="side-menu__icon"> <i class="md:text-blue-600" data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i class="md:text-red-600" data-feather="box"></i> </div>
                            <div class="side-menu__title"> Contaduría <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"
                            class="side-menu @if(request()->is('miembros') || request()->is('nuevo-miembro'))side-menu--active side-menu--open @endif">
                            <div class="side-menu__icon"> <i class="md:text-green-600" data-feather="users"></i> </div>
                            <div class="side-menu__title"> Clientes <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="@if(request()->is('miembros') || request()->is('nuevo-miembro'))side-menu__sub-open @endif">
                            <li>
                                <a href="/nuevo-miembro"  class="side-menu">
                                    <div class="side-menu__icon md:text-green-400"> <i data-feather="user-plus"></i> </div>
                                    <div class="side-menu__title"> Nuevo </div>
                                </a>
                            </li>
                            <li>
                                <a href="/miembros"  class="side-menu">
                                    <div class="side-menu__icon md:text-green-400"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Listado </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Solicitud <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Creditos <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Pagos <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Amortización <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Cajas <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Vistas <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Empleados <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Configuración <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/roles"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Roles & Permisos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users"  class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Usuarios </div>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @include('../layout/components/top-bar')
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>

    @include('../layout/components/dark-mode-switcher')



    @yield('script')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    ...
    <x-livewire-alert::scripts />
    <!-- BEGIN: JS Assets-->
    <script src="{{ mix('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->

    <script>
        window.livewire.on('modal-hide', () => {
            $('#references-modal').modal('hide');
        });
    </script>
</body>

</html>
