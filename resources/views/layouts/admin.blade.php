<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>

        @yield('title')

    </title>

    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    {!! Html::style('aero/assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('aero/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') !!}
    {!! Html::style('aero/assets/plugins/charts-c3/plugin.css') !!}

    {!! Html::style('aero/assets/plugins/morrisjs/morris.min.css') !!}
    <!-- Custom Css -->
    {!! Html::style('aero/assets/css/style.min.css') !!}
    @yield('style')
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{!!asset('aero/assets/images/loader.svg')!!}" width="48"
                    height="48" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Right Icon menu Sidebar -->
    @include('layouts._nav_right')

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="index.html"><img src="{!!asset('aero/assets/images/logo.svg')!!}" width="25" alt="Aero"><span
                    class="m-l-10">Aero</span></a>
        </div>

        @include('layouts._nav_menu')

    </aside>

    <!-- Right Sidebar -->
    @include('layouts._nav_right_config')

    <!-- Main Content -->

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
    </section>



    <!-- Jquery Core Js -->
    {!! Html::script('aero/assets/bundles/libscripts.bundle.js') !!}
    {!! Html::script('aero/assets/bundles/vendorscripts.bundle.js') !!}
    {!! Html::script('aero/assets/bundles/jvectormap.bundle.js') !!}
    {!! Html::script('aero/assets/bundles/sparkline.bundle.js') !!}
    {!! Html::script('aero/assets/bundles/c3.bundle.js') !!}

    {!! Html::script('aero/assets/bundles/mainscripts.bundle.js') !!}
    
    {!! Html::script('aero/assets/js/pages/index.js') !!}
    @yield('scripts')
</body>


</html>
