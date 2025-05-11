@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #c0c2e9">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')

        <div class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <h1 class="my-4">Gestión de Usuarios</h1>

            <!-- Filtros y búsqueda (opcional) -->
            <div class="mb-4">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="search" class="form-label">Buscar usuario</label>
                            <input type="text" class="form-control" id="search" placeholder="Buscar usuario">
                        </div>
                        <div class="col-md-6">
                            <label for="roleFilter" class="form-label">Filtrar por rol</label>
                            <select class="form-select" id="roleFilter">
                                <option selected>Seleccionar rol</option>
                                <option value="admin">Administrador</option>
                                <option value="usuario">Usuario</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Tabla de usuarios -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de usuarios (esto debe ser reemplazado por los datos reales si se conecta al backend) -->
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>juan@example.com</td>
                            <td>Administrador</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ana Gómez</td>
                            <td>ana@example.com</td>
                            <td>Usuario</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Ver</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <!-- Puedes agregar más filas de ejemplo si es necesario -->
                    </tbody>
                </table>
            </div>

            <!-- Botón para agregar nuevo usuario -->
            <div class="mt-4">
                <a href="#" class="btn btn-primary">Agregar nuevo usuario</a>
            </div>
        </div>
    </div>
</div>
@endsection
