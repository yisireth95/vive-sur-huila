@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')
        
        <div class="col-md-9">
            <h1 class="my-4">Gestión de Negocios Registrados</h1>

            <!-- Filtros y búsqueda -->
            <div class="mb-4">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar negocio</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar negocio registrado">
                        </div>
                        <div class="col-md-6">
                            <label for="filter" class="form-label">Filtrar por tipo de negocio</label>
                            <select class="form-select" id="filter">
                                <option selected>Seleccionar tipo de negocio</option>
                                <option value="1">Restaurantes</option>
                                <option value="2">Hoteles</option>
                                <option value="3">Tiendas de artesanías</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabla de negocios registrados -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Negocio</th>
                            <th>Tipo de Negocio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de negocio registrado -->
                        <tr>
                            <td>1</td>
                            <td>Restaurante El Sabor del Sur</td>
                            <td>Restaurantes</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hotel Montañas Verdes</td>
                            <td>Hoteles</td>
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

            <!-- Botón para agregar nuevo negocio registrado -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-lg">Agregar nuevo negocio registrado</a>
            </div>
        </div>
    </div>
</div>
@endsection
