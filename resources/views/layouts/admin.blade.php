<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::style('adminlte/plugins/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') !!}
    {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
    {!! Html::style('adminlte/dist/css/adminlte.min.css') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') !!}

    @yield('style')

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


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
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


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
                                    Lugares Turísticos
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


                        <!--Menu seguridad-->
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="fas fa-car-crash"></i>
                                <p>
                                    Seguridad Ciudadana
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('seguridad')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Actividad delictiva</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- /Fin menu seguridad -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                               <h1>@yield('title')</h1> 
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Inicio</a></li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                @if (session('info'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('info')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Default box -->
                @yield('content')
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.3-pre
            </div>
            <strong>Copyright &copy; 2020-2025 <a href="http://lanube.cu.ma">LaNube.cu.ma</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    {!! Html::script('adminlte/plugins/jquery/jquery.min.js') !!}
    <!-- jQuery UI 1.11.4 -->
    {!! Html::script('adminlte/plugins/jquery-ui/jquery-ui.min.js') !!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    {!! Html::script('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
    <!-- ChartJS -->
    {!! Html::script('adminlte/plugins/chart.js/Chart.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('adminlte/plugins/sparklines/sparkline.js') !!}
    <!-- JQVMap -->
    {!! Html::script('adminlte/plugins/jqvmap/jquery.vmap.min.js') !!}
    {!! Html::script('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}
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
    {!! Html::script('adminlte/dist/js/pages/dashboard.js') !!}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script('adminlte/dist/js/demo.js') !!}
    @yield('scripts')
</body>

</html>
