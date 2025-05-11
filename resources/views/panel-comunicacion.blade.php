@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')

        <div class="col-md-9">
            <h1 class="my-4 text-center">Panel de Comunicación</h1>

            <!-- Filtros y búsqueda (opcional) -->
            <div class="mb-4">
      
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar comunicación</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar comunicación">
                        </div>
                        <div class="col-md-6">
                            <label for="filter" class="form-label">Filtrar por categoría</label>
                            <select class="form-select" id="filter">
                                <option selected>Seleccionar categoría</option>
                                <option value="1">Mensajes</option>
                                <option value="2">Notificaciones</option>
                                <option value="3">Alertas</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Lista de comunicaciones -->
            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de comunicación -->
                        <tr>
                            <td>1</td>
                            <td>Reunión programada</td>
                            <td>Notificación</td>
                            <td>2024-11-23</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta comunicación?')">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Alerta de actualización</td>
                            <td>Alerta</td>
                            <td>2024-11-22</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta comunicación?')">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Botón para agregar nueva comunicación -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-lg">Agregar nueva comunicación</a>
            </div>
        </div>
    </div>
</div>
@endsection
