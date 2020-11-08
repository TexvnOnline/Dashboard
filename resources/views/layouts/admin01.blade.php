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


    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">

    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    {!! Html::style('aero/assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('aero/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') !!}
    {!! Html::style('aero/assets/plugins/charts-c3/plugin.css') !!}


    {!! Html::style('aero/assets/plugins/morrisjs/morris.min.css') !!}
    <!-- Custom Css -->
    {!! Html::style('aero/assets/css/style.min.css') !!}
    @yield('style')
</head>


<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="{!!asset('adminlte/dist/img/AdminLTELogo.png')!!}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{!!asset('adminlte/dist/img/user2-160x160.jpg')!!}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">

                    </div>
                </div>






















                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                    

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Parques
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('parks.dashboard')}}" class="nav-link">
                                        <i class="fas fa-tachometer-alt nav-icon"></i>
                                        <p>Panel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('parks.index')}}" class="nav-link">
                                        <i class="far fa-building nav-icon"></i>
                                        <p>Listar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        

                        
                        {{--  INCIDENTES DE TRANCITO  --}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-car-crash"></i>
                                <p>
                                    Incidentes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{route('dashboard.incidents')}}" class="nav-link">
                                        <i class="fas fa-tachometer-alt nav-icon"></i>
                                        <p>Panel</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('companies.index')}}" class="nav-link">
                                        <i class="far fa-building nav-icon"></i>
                                        <p>Empresas</p>
                                    </a>
                                </li>

                                {{--  <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista</p>
                                    </a>
                                </li>  --}}

                            </ul>
                        </li>












                        {{-- Ejemplo --}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="{{route('turismo')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Identidad Cultural
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('turismo')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lugares Turísticos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('addLugarTuristico')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar lugar</p>
                                    </a>

                                    <li class="nav-item">
                                    <a href="{{route('detallesderestaurantes')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Restaurantes</p>
                                    </a>

                                    <li class="nav-item">
                                    <a href="{{route('nuevorestaurante')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar Restaurantes</p>
                                    </a>

                                    <li class="nav-item">
                                    <a href="{{route('Hospedaje')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hospedajes</p>
                                    </a>

                                    <li class="nav-item">
                                    <a href="{{route('addHospedaje')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar Hospedajes</p>
                                    </a>

                                    
                                <li class="nav-item">
                                    <a href="" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Eventos</p>
                                    </a>22

                                <li class="nav-item">
                                    <a href="" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar Eventos</p>
                                    </a>

                                </li>
                        </li>
                    </ul>
                    </li>










                    <li class="nav-item has-treeview">
                        <a href="" class="nav-link">
                            <i class="fas fa-car-crash"></i>
                            <p>
                                Transporte
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('incidentes')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Incidentes</p>
                                </a>
                            </li>
                        </ul>



                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('reporteincidentes')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Reportes</p>
                                </a>
                            </li>
                        </ul>

                    </li>



                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Part. Ciudadana
                                <i class="right fas fa-angle-left"></i>
                            </p>

                        </a>

                        <ul class="nav  nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('registroObras')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registro de Obras </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('VistaAutori')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vista de Autoridades</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--Semaforos-->
                    <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="fas fa-traffic-light nav-icon"></i>
                                <p>
                                    Semáforos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('semaforos.dashboard')}}" class="nav-link">
                                    <i class="fas fa-eye nav-icon"></i>
                                        <p>Visualización</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('semaforos.index')}}" class="nav-link">
                                        <i class="fas fa-clipboard-list nav-icon"></i>
                                        <p>Listar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('semaforos.usuario')}}" class="nav-link">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('semaforos.camara')}}" class="nav-link">
                                        <i class="fas fa-video nav-icon"></i>
                                        <p>Videocámara</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    <!--Menu seguridad-->
                    <li class="nav-item has-treeview">
                        <a href="" class="nav-link">
                            <i class="fas fa-shield-alt"></i>
                            <p>
                                Seguridad Ciudadana
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('seguridad')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Detalle Delitos</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /Fin menu seguridad -->
                </nav>
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

<<<<<<< HEAD
    </script>
    
    <!-- Bootstrap 4 -->
    {!! Html::script('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
    <!-- ChartJS -->
    {!! Html::script('adminlte/plugins/chart.js/Chart.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('adminlte/plugins/sparklines/sparkline.js') !!}
    <!-- JQVMap -->
    {{--  {!! Html::script('adminlte/plugins/jqvmap/jquery.vmap.min.js') !!}  --}}
    {{--  {!! Html::script('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}  --}}
    <!-- jQuery Knob Chart -->
    {!! Html::script('adminlte/plugins/jquery-knob/jquery.knob.min.js') !!}
    <!-- daterangepicker -->
    {!! Html::script('adminlte/plugins/moment/moment.min.js') !!}
    {!! Html::script('adminlte/plugins/daterangepicker/daterangepicker.js') !!}
    <!-- Tempusdominus Bootstrap 4 -->
    {!! Html::script('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}
    <!-- Summernote -->
    {!! Html::script('adminlte/plugins/summernote/summernote-bs4.min.js') !!}
    <!-- overlayScrollbars -->
    {!! Html::script('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}
    <!-- AdminLTE App -->
    {!! Html::script('adminlte/dist/js/adminlte.js') !!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{--  {!! Html::script('adminlte/dist/js/pages/dashboard.js') !!}  --}}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script('adminlte/dist/js/demo.js') !!}
=======
>>>>>>> 6362e42d1f8548f4fb5a91a49f648b6d2bd1fe68


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
