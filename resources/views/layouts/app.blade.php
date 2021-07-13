<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    {{--    <script src="path/to/dist/feather.js"></script>--}}
    @yield('head')

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- END: CSS Assets-->

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    @yield('map-head')

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
                    @can('create_accountancy')
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i class="md:text-red-600" data-feather="box"></i> </div>
                            <div class="side-menu__title"> Contaduría <i data-feather="chevron-down"
                                    class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/balance/balance/add" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Balance Ingresos </div>
                                </a>
                            </li>
                            <li>
                                <a href="/balance/balance/out" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Balance Egresos</div>
                                </a>
                            </li>
                            <li>
                                <a href="/home" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Contabilidad </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @canany(['create_client','read_client','update_client','destroy_client'])
                        <li>
                        <a href="javascript:;"
                            class="side-menu @if(request()->is('miembros') || request()->is('nuevo-miembro'))side-menu--active side-menu--open @endif">
                            <div class="side-menu__icon"> <i class="md:text-green-600" data-feather="users"></i> </div>
                            <div class="side-menu__title"> Clientes <i data-feather="chevron-down"
                                    class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="@if(request()->is('miembros') || request()->is('nuevo-miembro'))side-menu__sub-open @endif">
                            @can('create_client')
                            <li>
                                <a href="/nuevo-miembro" class="side-menu">
                                    <div class="side-menu__icon md:text-green-400"> <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="side-menu__title"> Nuevo </div>
                                </a>
                            </li>
                            @endcan
                            @can('read_client')
                                <li>
                                    <a href="/miembros" class="side-menu">
                                        <div class="side-menu__icon md:text-green-400"> <i data-feather="list"></i> </div>
                                        <div class="side-menu__title"> Listado </div>
                                    </a>
                                </li>
                            @endcan
                            @canany(['create_account','read_account','update_account','destroy_account'])
                                <li>
                                    <a href="/listado-cuentas" class="side-menu">
                                        <div class="side-menu__icon md:text-green-400"> <i data-feather="layers"></i> </div>
                                        <div class="side-menu__title"> Cuentas </div>
                                    </a>
                                </li>
                            @endcanany

                        </ul>
                    </li>
                    @endcanany

                    @canany(['create_request','read_request','update_request','destroy_request'])
                        <li>
                            <a href="javascript:;"
                                class="side-menu @if(request()->is('nueva-solicitud') || request()->is('listado-solicitudes'))side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Solicitudes <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul
                                class="@if(request()->is('nueva-solicitud') || request()->is('listado-solicitudes'))side-menu__sub-open @endif">
                                {{--                        <ul>--}}
                                @can('create_request')
                                <li>
                                    <a href="/nueva-solicitud" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Nueva </div>
                                    </a>
                                </li>
                                @endcan
                                @canany('read_request')
                                    <li>
                                        <a href="/listado-solicitudes" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Solicitudes Créditos </div>
                                        </a>
                                    </li>
                                @endcanany
                            </ul>
                        </li>
                    @endcanany

                    @canany(['create_visit','read_visit','update_visit','destroy_visit'])
                        <li>
                            <a href="javascript:;"
                                class="side-menu  @if(request()->is('visita-de-asesor') || request()->is('listado-visitas'))side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Visitas Asesor <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul
                                class="@if(request()->is('visita-de-asesor') || request()->is('listado-visitas'))side-menu__sub-open @endif">
                                {{--                        <ul>--}}
                                @can('create_visit')
                                <li>
                                    <a href="/visita-de-asesor" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Nueva </div>
                                    </a>
                                </li>
                                @endcan

                                @can('read_visit')
                                    <li>
                                        <a href="/listado-visitas" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Listado de Visitas </div>
                                        </a>
                                    </li>
                                @endcanany
                            </ul>
                        </li>
                    @endcanany

                    @can('read_contribution')
                    <li>
                        <a href="javascript:;" class="side-menu @if(request()->is('aportes-socios'))side-menu--active side-menu--open @endif">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Aportes <i data-feather="chevron-down"
                                    class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="@if(request()->is('aportes-socios'))side-menu__sub-open @endif">
                            <li>
                                <a href="/aportes-socios" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Aportes socios</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @canany(['create_credit','read_credit','update_credit','destroy_credit'])
                        <li>
                            <a href="javascript:;" class="side-menu @if(request()->is('nuevo-credito') || request()->is('creditos'))side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Créditos <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="@if(request()->is('nuevo-credito') || request()->is('creditos'))side-menu__sub-open @endif">
                                @can('create_credit')
                                    <li>
                                        <a href="/nuevo-credito" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Nuevo </div>
                                        </a>
                                    </li>
                                @endcan
                                @can('read_credit')
                                    <li>
                                        <a href="/creditos" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Listado </div>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcanany

                    @canany(['create_transactions','read_transactions','update_transactions','destroy_transactions'])
                        <li>
                            <a href="javascript:;"
                                class="side-menu @if(request()->is('deposito') || request()->is('retiro'))side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Transacciones <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="@if(request()->is('deposito') || request()->is('retiro'))side-menu__sub-open @endif">
                                <li>
                                    <a href="{{route('deposit')}}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Deposito </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('retreats')}}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Retiro </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcanany

                    @canany(['create_notebook','read_notebook','update_notebook','destroy_notebook'])
                        <li>
                            <a href="javascript:;" class="side-menu @if(request()->is('nueva-libreta') )side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Libretas <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="@if(request()->is('nueva-libreta'))side-menu__sub-open @endif">
                                <li>
                                    <a href="/nueva-libreta" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Nueva </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcanany

                    @canany(['create_simulator','read_simulator','update_simulator','destroy_simulator'])
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Simulador <i data-feather="chevron-down"
                                    class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="@if(request()->is('amortizacion-tabla'))side-menu__sub-open @endif">
                            <li>
                                <a href="/amortizacion-tabla" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Tabla </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    @endcanany

                    @canany(['create_payment','read_payment','update_payment','destroy_payment'])
                    <li>
                        <a href="javascript:;" class="side-menu @if(request()->is('nuevo-pago') || request()->is('users'))side-menu--active side-menu--open @endif">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Pagos <i data-feather="chevron-down"
                                    class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="@if(request()->is('nuevo-pago') || request()->is('users'))side-menu__sub-open @endif">
                            @can('create_payment')
                                <li>
                                    <a href="/nuevo-pago" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Nuevo </div>
                                    </a>
                                </li>
                            @endcan
{{--                            @can('read_payment')--}}
{{--                                <li>--}}
{{--                                    <a href="/users" class="side-menu">--}}
{{--                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>--}}
{{--                                        <div class="side-menu__title"> Listado </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
                        </ul>
                    </li>
                    @endcanany

                    @canany(['create_role','read_role','update_role','destroy_role','create_user','read_user','update_user','destroy_user'])
                        <li>
                            <a href="javascript:;" class="side-menu @if(request()->is('roles') || request()->is('usuarios'))side-menu--active side-menu--open @endif">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Configuración <i data-feather="chevron-down"
                                        class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="@if(request()->is('roles') || request()->is('usuarios'))side-menu__sub-open @endif">
                                @canany(['create_role','read_role','update_role','destroy_role'])
                                    <li>
                                        <a href="/roles" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Roles & Permisos </div>
                                        </a>
                                    </li>
                                @endcanany
                                @canany(['create_user','read_user','update_user','destroy_user'])
                                    <li>
                                        <a href="/usuarios" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="side-menu__title"> Usuarios </div>
                                        </a>
                                    </li>
                                @endcanany
                            </ul>
                        </li>
                    @endcanany

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    @yield('script')


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    ...
    <x-livewire-alert::scripts />
    <!-- BEGIN: JS Assets-->
    <script src="{{ mix('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
    @yield('map-script')
    <script>
        window.livewire.on('modal-hide', () => {
            $('#references-modal').modal('hide');
        });
    </script>
</body>

</html>
