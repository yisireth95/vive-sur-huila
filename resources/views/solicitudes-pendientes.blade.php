@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')

        <div class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <h1 class="my-4">Solicitudes Pendientes</h1>

            <!-- Filtros y búsqueda (opcional) -->
            <div class="mb-4">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar solicitud</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar solicitud">
                        </div>
                        <div class="col-md-6">
                            <label for="statusFilter" class="form-label">Filtrar por estado</label>
                            <select class="form-select" id="statusFilter">
                                <option selected>Seleccionar estado</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="aprobada">Aprobada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabla de solicitudes pendientes -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Solicitante</th>
                            <th>Tipo de Solicitud</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de solicitudes (esto debe ser reemplazado por datos reales) -->
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>Solicitud de Permiso</td>
                            <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-success btn-sm">Aprobar</a>
                                <a href="#" class="btn btn-danger btn-sm">Rechazar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ana Gómez</td>
                            <td>Solicitud de Reembolso</td>
                            <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-success btn-sm">Aprobar</a>
                                <a href="#" class="btn btn-danger btn-sm">Rechazar</a>
                            </td>
                        </tr>
                        <!-- Puedes agregar más filas de ejemplo si es necesario -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
