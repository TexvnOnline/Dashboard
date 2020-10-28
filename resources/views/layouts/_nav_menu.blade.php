<div class="menu">
    <ul class="list">


        <li>
            <div class="user-info">
                <a class="image" href="profile.html"><img src="aero/assets/images/profile_av.jpg" alt="User"></a>
                <div class="detail">
                    <h4>Michael</h4>
                    <small>Super Admin</small>                        
                </div>
            </div>
        </li>

        <li class="active open"><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Parques
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="{{route('parks.dashboard')}}">
                        Panel
                    </a>
                </li>
                <li >
                    <a href="{{route('parks.index')}}">
                        Listar
                    </a>
                </li>
            </ul>
        </li>



        {{--  INCIDENTES DE TRANCITO  --}}
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Incidentes
                </span>
            </a>
            <ul class="ml-menu">

                <li >
                    <a href="{{route('dashboard.incidents')}}">
                        Panel
                    </a>
                </li>

                <li >
                    <a href="{{route('companies.index')}}">
                        Empresas
                    </a>
                </li>
            </ul>
        </li>












        {{-- Ejemplo --}}
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Usuarios
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="">
                        Crear
                    </a>
                </li>
                <li >
                    <a href="">
                        Lista
                    </a>
                </li>
            </ul>
        </li>





        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Identidad Cultural
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="{{route('turismo')}}">
                        Lugares Turísticos
                    </a>
                </li>
                <li >
                    <a href="{{route('addLugarTuristico')}}">
                        Agregar lugar
                    </a>
                </li>
                <li >
                    <a href="{{route('detallesderestaurantes')}}" >
                        Restaurantes
                    </a>
                </li>
                <li >
                    <a href="{{route('nuevorestaurante')}}">
                        Agregar Restaurantes
                    </a>
                </li>
                <li >
                    <a href="{{route('Hospedaje')}}" >
                        Hospedajes
                    </a>
                </li>
                <li >
                    <a href="{{route('addHospedaje')}}" >
                        Agregar Hospedajes
                    </a>
                </li>

                <li >
                    <a href="" >
                        Eventos
                    </a>
                </li>
                <li >
                    <a href="">
                        Agregar Eventos
                    </a>
                </li>

            </ul>
        </li>










        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Transporte
                </span>
            </a>

            <ul class="ml-menu">
                <li >
                    <a href="{{route('incidentes')}}" >
                        Incidentes
                    </a>
                </li>
                <li >
                    <a href="{{route('reporteincidentes')}}" >
                        Reportes
                    </a>
                </li>
            </ul>



        </li>



        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Part. Ciudadana
                </span>
            </a>

            <ul class="ml-menu">
                <li >
                    <a href="{{route('registroObras')}}" >
                        Registro de Obras
                    </a>
                </li>

                <li >
                    <a href="{{route('VistaAutori')}}" >
                        Vista de Autoridades
                    </a>
                </li>

            </ul>
        </li>

        <!--Semaforos-->
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Semáforos
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="{{route('semaforos.dashboard')}}">
                        Visualización
                    </a>
                </li>
                <li >
                    <a href="{{route('semaforos.index')}}">
                        Listar
                    </a>
                </li>
            </ul>
        </li>

        <!--Menu seguridad-->
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Seguridad Ciudadana
                </span>
            </a>

            <ul class="ml-menu">
                <li >
                    <a href="{{route('seguridad')}}" >
                        Detalle Delitos
                    </a>
                </li>
            </ul>
        </li>
        <!-- /Fin menu seguridad -->




        <!-- Inicio Menu de Rutas de Transporte-->
        <li>

            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Rutas de Transporte
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="{{route('inicio_rutas_trans')}}" >
                        Inicio
                    </a>
                </li>
                <li >
                    <a href="{{route('vista_registro_rutas')}}" >
                        Registro
                    </a>
                </li>
            </ul>


        </li>

        <!-- Inicio Menu Turista y Ciudad -->

        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-hc-fw"></i>
                <span>
                    Turista y la Ciudad
                </span>
            </a>
            <ul class="ml-menu">
                <li >
                    <a href="{{route('TuristaCiudad')}}" >
                        lugar Turistico
                    </a>
                </li>
                <li >
                    <a href="{{route('addlugarturistica')}}" >
                        Agregar Lugar Turistico
                    </a>
                </li>

                <li >
                    <a href="{{route('fotografia')}}" >
                        Fotografia
                    </a>
                </li>
                <li >
                    <a href="{{route('addfotografia')}}" >
                        Agregar Fotografia
                    </a>
                </li>

                <li >
                    <a href="{{('addanimacion')}}" >
                        Agregar Animacion
                    </a>
                </li>

                <a href="{{('resumen')}}">
                    Resumen
                </a>
            </ul>
        </li>



    </ul>
</div>
