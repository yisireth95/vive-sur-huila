@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')

        <div class="col-md-9">
            <h1 class="my-4 text-center">Gestión de Pagos</h1>

            <!-- Filtros y búsqueda -->
            <div class="mb-4 p-4 bg-white border rounded">
                {{-- <h4 class="mb-3">Filtros</h4> --}}
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar pago</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar por ID o nombre">
                        </div>
                        <div class="col-md-6">
                            <label for="filter" class="form-label">Filtrar por estado</label>
                            <select class="form-select" id="filter">
                                <option selected>Seleccionar estado</option>
                                <option value="1">Pagado</option>
                                <option value="2">Pendiente</option>
                                <option value="3">Rechazado</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabla de pagos -->
            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Usuario</th>
                            <th>Monto</th>
                            <th>Fecha de Pago</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de pago -->
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>$100.00</td>
                            <td>2024-11-23</td>
                            <td><span class="badge bg-success">Pagado</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este pago?')">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ana Gómez</td>
                            <td>$50.00</td>
                            <td>2024-11-22</td>
                            <td><span class="badge bg-warning">Pendiente</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este pago?')">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Botón para agregar nuevo pago -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-lg">Agregar nuevo pago</a>
            </div>
        </div>
    </div>
</div>
@endsection
