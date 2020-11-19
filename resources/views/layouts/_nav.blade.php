<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                    <a href="{{route('parks.create')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Registrar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('parks.index')}}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Listar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sensors.index')}}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Sensores</p>
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
                {{--  insertar vehiculo  --}}
                <li class="nav-item">
                    <a href="{{route('vehicles.create')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Registrar vehículo</p>
                    </a>
                </li>

                {{--  registrar conductor   --}}
                <li class="nav-item">
                    <a href="{{route('conductores.create')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Registrar conductor</p>
                    </a>
                </li>

                {{--  listar tipos de incidente  --}}
                <li class="nav-item">
                    <a href="{{route('tipo.incidente.index')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Tipos de incidente</p>
                    </a>
                </li>
                {{--  registar tipo de incidente  --}}
                <li class="nav-item">
                    <a href="{{route('tipo.incidente.create')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Registrar tipo</p>
                    </a>
                </li>

                
                 
                
                <li class="nav-item">
                    <a href="{{route('conductores.index')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Conductores</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('conductores.create')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Registrar conductor</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('companies.index')}}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Empresas</p>
                    </a>
                </li>
            </ul>
        </li>

        {{--  OBRAS  --}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-car-crash"></i>
                <p>
                    Obras
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('obras.index')}}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>

                {{--  mapa de obra  --}}
                

                <li class="nav-item">
                    <a href="{{route('mapadeobra')}}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Mapa</p>
                    </a>
                </li>

            </ul>
        </li>





        {{-- Usuarios --}}
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

        {{--  Identidad Cultural  --}}
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Identidad Cultural
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">

                {{--  fotos  --}}

                <li class="nav-item">
                    <a href="{{route('fotografias')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fotografías</p>
                    </a>
                </li> 

                <li class="nav-item">
                    <a href="{{route('lugar.top')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lugares top</p>
                    </a>
                </li> 

                

                <li class="nav-item">
                    <a href="{{route('tourists.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lugares Turísticos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tourists.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar lugar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('restaurants.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recurso</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('restaurants.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar recursos</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('events.index')}}" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>
                        <p>Eventos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('events.create')}}" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar Eventos</p>
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
        {{-- Semaforos --}}
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

        <li class="nav-item has-treeview">

            <a href="" class="nav-link">
                <i class="fas fa-taxi"></i>
                <p>

                    Rutas de Transporte
                    <i class="right fas fa-angle-left"></i>
                </p>

            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('inicio_rutas_trans')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inicio</p>
                    </a>
                </li>
            </ul>



            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('vista_registro_rutas')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro</p>
                    </a>
                </li>
            </ul>

        </li>

        {{--  Contacto Turista y la Ciudad  --}}
        <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Contacto Turista y la Ciudad
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">

                {{--  fotos  --}}

                <li class="nav-item">
                    <a href="{{route('fotografias')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fotografías</p>
                    </a>
                </li>                 

                <li class="nav-item">
                    <a href="{{route('tourists.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lugares Turísticos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tourists.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar lugar</p>
                    </a>
                </li>
                
                








</nav>
