<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
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
    <!-- END: CSS Assets-->

    @livewireStyles
    @livewireScripts
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
                        <a href="" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Accesos <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="/members" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Miembros </div>
                                </a>
                            </li>
                            <li>
                                <a href="/users" class="side-menu">
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
            @yield('body')
        </div>
        <!-- END: Content -->
    </div>

    @include('../layout/components/dark-mode-switcher')

    <!-- BEGIN: JS Assets-->
    <script src="{{ mix('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->

    @yield('script')

    @livewireScripts
</body>

</html>