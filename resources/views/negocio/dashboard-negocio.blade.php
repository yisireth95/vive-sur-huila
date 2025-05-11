@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_negocio') <!-- Sidebar específico para negocio turístico -->
        
        <div class="col-md-9">
            <h1 class="my-4 text-center text-primary font-weight-bold">Dashboard - Negocio Turístico</h1>

            <!-- Información del Negocio -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h5>Información del Negocio</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Nombre del Negocio:</strong> Nombre del Negocio Ejemplo</p>
                            <p><strong>Categoría:</strong> Restaurante</p>
                            <p><strong>Ubicación:</strong> Calle Ejemplo #123</p>
                            <p><strong>Contacto:</strong> +1234567890</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h5>Estadísticas del Negocio</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Total de visitas:</strong> 150</p>
                            <p><strong>Total de reservas:</strong> 45</p>
                            <p><strong>Valor Total:</strong> $5000.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Acciones Rápidas -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <a href="{{ route('negocio.reservas') }}" class="btn btn-primary btn-lg btn-block shadow-sm">
                        <i class="fas fa-calendar-check me-2"></i> Ver Reservas
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('negocio.fotos') }}" class="btn btn-info btn-lg btn-block shadow-sm">
                        <i class="fas fa-images me-2"></i> Gestionar Fotos
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('negocio.comunicaciones') }}" class="btn btn-warning btn-lg btn-block shadow-sm">
                        <i class="fas fa-bell me-2"></i> Comunicaciones
                    </a>
                </div>
            </div>

            <!-- Comentarios y Valoraciones -->
            <div class="mt-4">
                <h4 class="text-primary font-weight-bold">Comentarios Recientes</h4>
                <ul class="list-group">
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Usuario 1:</strong> Excelente servicio, todo fue perfecto.</p>
                        <p><small>2024-11-23</small></p>
                    </li>
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Usuario 2:</strong> Muy buena atención, el lugar es muy acogedor.</p>
                        <p><small>2024-11-22</small></p>
                    </li>
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Usuario 3:</strong> El ambiente es maravilloso, volvería sin dudar.</p>
                        <p><small>2024-11-20</small></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
