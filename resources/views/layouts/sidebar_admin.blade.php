<div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex flex-column sticky-top" style="background-color: #ffffff">
    <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
        <a href="#" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="img/servicios/logo2-1.png" alt="" class="img-fluid">
        </a>
        <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
            id="menu">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-chart-line" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Dashboard</span>
                    </b>
                </a>
            </li>
            <li>
                <a href="/gestion-sitios-turisticos" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-building" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Gestión de sitios turísticos.</span>
                    </b>
                </a>
            </li>
            <li>
                <a href="/gestion-negocios-registrados" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-building" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Gestión de negocios registrados.</span>
                    </b>
                </a>
            </li>
            <li>
                <a href="/gestion-usuarios" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-comments-dollar" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Gestión de usuarios</span>
                    </b>
                </a>
            </li>
            <li>
                <a href="/solicitudes-pendientes" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-user-tie" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Solicitudes pendientes:</span>
                    </b>
                </a>
            </li>
            <li>
                <a href="/panel-comunicacion" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-key" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Panel de comunicación</span>
                    </b>
                </a>
            </li>
            
           
            <li>
           
            <li>
                <a href="/pagos" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-money-bill-wave" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Pagos</span>
                    </b>
                </a>
            </li>
           
            
            <li>
                <a href="/usuarios" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-user" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Usuarios</span>
                    </b>
                </a>
            </li>
            <li>
            
           
            <li>
                <a href="/calendar" class="nav-link px-sm-0 px-2 text-white">
                    <b>
                        <i class="fa-solid fa-calendar" style="color: #F09111"></i>
                        <span class="ms-1 d-none d-sm-inline" style="color: grey">Calendario</span>
                    </b>
                </a>
            </li>



        </ul>
    </div>
    <!-- Sección para el nombre de usuario y el dropdown -->
    <div class="mt-auto px-3 pb-3">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-secondary text-decoration-none dropdown-toggle"
                id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <span>{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
