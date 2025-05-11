
<div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex flex-column sticky-top" style="background-color: #ffffff; border-right: 1px solid #ddd; height: 100vh;">
    <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark">
        <!-- Logo -->
        <a href="{{ route('negocio.dashboard-negocio') }}" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="/img/servicios/logo2-1.png" alt="Logo" class="img-fluid" style="max-height: 200px;">
        </a>

        <!-- Menú de navegación -->
        <ul class="nav flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
            <!-- Enlace al Dashboard -->
            <li class="nav-item w-100">
                <a href="{{ route('negocio.dashboard-negocio') }}" class="nav-link d-flex align-items-center p-3 {{ request()->is('negocio/dashboard') ? 'bg-primary text-white' : 'text-dark' }} rounded">
                    <i class="fas fa-tachometer-alt me-3"></i> <span>Dashboard</span>
                </a>
            </li>

            <!-- Enlace a Reservas -->
            <li class="nav-item w-100">
                <a href="{{ route('negocio.reservas') }}" class="nav-link d-flex align-items-center p-3 {{ request()->is('negocio/reservas') ? 'bg-primary text-white' : 'text-dark' }} rounded">
                    <i class="fas fa-calendar-check me-3"></i> <span>Reservas</span>
                </a>
            </li>

            <!-- Enlace a Fotos -->
            <li class="nav-item w-100">
                <a href="{{ route('negocio.fotos') }}" class="nav-link d-flex align-items-center p-3 {{ request()->is('negocio/fotos') ? 'bg-primary text-white' : 'text-dark' }} rounded">
                    <i class="fas fa-images me-3"></i> <span>Fotos</span>
                </a>
            </li>

            <!-- Enlace a Comunicaciones -->
            <li class="nav-item w-100">
                <a href="{{ route('negocio.comunicaciones') }}" class="nav-link d-flex align-items-center p-3 {{ request()->is('negocio/comunicaciones') ? 'bg-primary text-white' : 'text-dark' }} rounded">
                    <i class="fas fa-bell me-3"></i> <span>Comunicaciones</span>
                </a>
            </li>

            <!-- Enlace a Configuración -->
            <li class="nav-item w-100">
                <a href="" class="nav-link d-flex align-items-center p-3 {{ request()->is('negocio/configuracion') ? 'bg-primary text-white' : 'text-dark' }} rounded">
                    <i class="fas fa-cogs me-3"></i> <span>Configuración</span>
                </a>
            </li>
        </ul>
    </div>
</div>
