<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('vendor.adminlte.layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('vendor.adminlte.layouts.partials.mainheader')

    @include('vendor.adminlte.layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('vendor.adminlte.layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('vendor.adminlte.layouts.partials.controlsidebar')

    @include('vendor.adminlte.layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('vendor.adminlte.layouts.partials.scripts')
@show

</body>
</html>
