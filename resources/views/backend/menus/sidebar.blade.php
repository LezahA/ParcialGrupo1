<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="{{ asset('images/Logo_carros.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight" style="color: white">Dashboard</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

                <!-- ROLES Y PERMISO -->
                @can('sidebar.roles.y.permisos')
                 <li class="nav-item">

                     <a href="#" class="nav-link nav-">
                        <i class="far fa-edit"></i>
                        <p>
                            Roles y Permisos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" target="frameprincipal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rol y Permisos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.permisos.index') }}" target="frameprincipal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuario</p>
                            </a>
                        </li>

                    </ul>
                 </li>
                @endcan

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                        <li class="nav-item">
                            <a href="{{ route('vehiculos.index') }}" target="frameprincipal" class="nav-link nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                <p>
                                    Vehículos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Soap.soap_form') }}" target="frameprincipal" class="nav-link nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Calculadora
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </ul>
        </nav>


    </div>
</aside>