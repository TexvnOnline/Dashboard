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
                </li>
                <li class="nav-item">
                    <a href="{{route('detallesderestaurantes')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Restaurantes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('nuevorestaurante')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar Restaurantes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Hospedaje')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Hospedajes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('addHospedaje')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar Hospedajes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>
                        <p>Eventos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">

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
</nav>
