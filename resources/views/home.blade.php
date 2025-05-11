@extends('layouts.app')
@section('content')

<div class="container-fluid" style="background-color: #c0c2e9;">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar_admin')
        
        <!-- Contenido principal -->
        <div class="col-12 col-lg-10 d-flex flex-column" style="padding: 0;">
            <div class="flex-grow-1 p-4">
                
                <h2 class="text-white text-center mb-4">Gráficos de Ganancias y Pérdidas</h2>

                <!-- Filtro por fechas -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="startDate" class="form-label text-white">Fecha de inicio:</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                    <div class="col-md-6">
                        <label for="endDate" class="form-label text-white">Fecha de fin:</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                </div>
                
                <!-- Contenedor de gráficos y tendencias -->
                <div class="container text-white p-2">
                    <div class="row">
                        <!-- Gráfico: Negocios registrados -->
                        <div class="col-lg-4 mb-4">
                            <p class="p-2 bg-dark text-center"><b>Total de negocios registrados: <span id="totalNegocios">150</span></b></p>
                            <canvas id="negociosPorMesChart"></canvas>
                        </div>

                        <!-- Gráfico: Usuarios registrados -->
                        <div class="col-lg-4 mb-4">
                            <p class="p-2 bg-dark text-center"><b>Total de usuarios registrados: <span id="totalUsuarios">2000</span></b></p>
                            <canvas id="usuariosPorMesChart"></canvas>
                        </div>
                        
                        <!-- Sección: Tendencias -->
                        <div class="col-lg-4 mb-4">
                            <p class="p-2 bg-dark text-center"><b>Tendencias:</b></p>
                            <ul class="bg-dark p-3 text-start" style="list-style-type: none; padding-left: 0;">
                                <li>- Hoteles nuevos: 5</li>
                                <li>- Tours más reservados: "Cascadas del sur"</li>
                                <li>- Restaurantes mejor calificados: "La Huilense"</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #343a40;
        color: white;
    }
    .bg-dark {
        background-color: #212529 !important;
    }
    @media (max-width: 768px) {
        .bg-dark {
            font-size: 0.9rem;
        }
    }
</style>

@endsection

@section('javascript')
@parent
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Gráfico de Negocios Registrados por Mes
        const negociosCtx = document.getElementById('negociosPorMesChart').getContext('2d');
        new Chart(negociosCtx, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Negocios Registrados',
                    data: [10, 20, 15, 30, 25, 50],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                    tooltip: { enabled: true }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 10 }
                    }
                }
            }
        });

        // Gráfico de Usuarios Registrados por Mes
        const usuariosCtx = document.getElementById('usuariosPorMesChart').getContext('2d');
        new Chart(usuariosCtx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Usuarios Registrados',
                    data: [200, 300, 400, 500, 700, 900],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                    tooltip: { enabled: true }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 100 }
                    }
                }
            }
        });
    });
</script>
@endsection
