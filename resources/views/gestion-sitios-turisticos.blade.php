@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')
        
        <div class="col-md-9">
            <h1 class="my-4">Gestión de Sitios Turísticos</h1>

            <!-- Filtros y búsqueda -->
            <div class="mb-4">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar sitio</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar sitio turístico">
                        </div>
                        <div class="col-md-6">
                            <label for="filter" class="form-label">Filtrar por categoría</label>
                            <select class="form-select" id="filter">
                                <option selected>Seleccionar categoría</option>
                                <option value="1">Playas</option>
                                <option value="2">Montañas</option>
                                <option value="3">Ríos</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabla de sitios turísticos -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Sitio</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de sitios turísticos -->
                        <tr>
                            <td>1</td>
                            <td>Cascadas del Sur</td>
                            <td>Playas</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Parque Natural Las Montañas</td>
                            <td>Montañas</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <!-- Agregar más filas de ejemplo si es necesario -->
                    </tbody>
                </table>
            </div>

            <!-- Botón para agregar nuevo sitio turístico -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-lg">Agregar nuevo sitio turístico</a>
            </div>
        </div>
    </div>
</div>
@endsection
