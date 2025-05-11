@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #f5f6fa;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.siderbar_turista') <!-- Sidebar específico para usuario -->
        
        <div class="col-md-9">
            <h1 class="my-4 text-center text-primary font-weight-bold">Dashboard - Usuario</h1>

            <!-- Información del Usuario -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5>Información del Usuario</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Nombre:</strong> Juan Pérez</p>
                            <p><strong>Email:</strong> juanperez@example.com</p>
                            <p><strong>Teléfono:</strong> +1234567890</p>
                            <p><strong>Fecha de Registro:</strong> 2024-01-15</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h5>Estadísticas de Actividad</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Total de reservas realizadas:</strong> 10</p>
                            <p><strong>Comentarios enviados:</strong> 5</p>
                            <p><strong>Última actividad:</strong> 2024-11-22</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Acciones Rápidas -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <a href="" class="btn btn-primary btn-lg btn-block shadow-sm">
                        <i class="fas fa-calendar-check me-2"></i> Mis Reservas
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-info btn-lg btn-block shadow-sm">
                        <i class="fas fa-comment me-2"></i> Mis Comentarios
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-warning btn-lg btn-block shadow-sm">
                        <i class="fas fa-user me-2"></i> Ver Perfil
                    </a>
                </div>
            </div>

            <!-- Actividad Reciente -->
            <div class="mt-4">
                <h4 class="text-primary font-weight-bold">Actividad Reciente</h4>
                <ul class="list-group">
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Reserva realizada:</strong> Restaurante El Buen Sabor</p>
                        <p><small>2024-11-23</small></p>
                    </li>
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Comentario enviado:</strong> Excelente servicio en el hotel.</p>
                        <p><small>2024-11-22</small></p>
                    </li>
                    <li class="list-group-item border-left-0 border-right-0 shadow-sm">
                        <p><strong>Reserva realizada:</strong> Spa Relax</p>
                        <p><small>2024-11-20</small></p>
                    </li>
                </ul>
            </div>

            <!-- Notificaciones -->
            <div class="mt-4">
                <h4 class="text-primary font-weight-bold">Notificaciones</h4>
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-info-circle me-2"></i> ¡Recuerda completar tu perfil para mejorar tu experiencia!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
