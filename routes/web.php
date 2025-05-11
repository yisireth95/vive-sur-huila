<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GestionSitiosTuriController;
use App\Http\Controllers\GestionNegociosRegiController;
use App\Http\Controllers\GestionUsuariosController;
use App\Http\Controllers\SolicitudesPendientesController;
use App\Http\Controllers\PanelComunicacionController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\NegocioController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TuristaController;
// use App\Http\Controllers\GestionUsuariosController;
// use App\Http\Controllers\GestionUsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);

    ////////////Gestion sitios turisticocos //////////////////
    Route::get('/gestion-sitios-turisticos', [GestionSitiosTuriController::class, 'gestionSitios'])->name('gestion.sitios');


    /////////////Gestion Negocios Registrados /////////////////////////////
    Route::get('/gestion-negocios-registrados', [GestionNegociosRegiController::class, 'gestionNegocios'])->name('gestion.sitios');


  /////////////////Gestion de Usuarios //////////////////////////////////
    Route::get('/gestion-usuarios', [GestionUsuariosController::class, 'index'])->name('gestion.usuarios');

    ///////////////////Gestion de Solicitudes Pendientes ///////////////////////////
    Route::get('/solicitudes-pendientes', [SolicitudesPendientesController::class, 'index'])->name('solicitudes.pendientes');

    ////////////////////////////// Ruta para el panel de comunicación///////////////////7
    Route::get('/panel-comunicacion', [PanelComunicacionController::class, 'index'])->name('panel.comunicacion');

    //////////////////////////////////////Pagos/////////////////////////////////7
    Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.index');
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7

////////////////////  ROL NEGOCIO/////////////////////////////////////////7


Route::middleware(['auth', 'negocio'])->group(function () {
    Route::get('/negocio/dashboard-negocio', [NegocioController::class, 'dashboard'])->name('negocio.dashboard-negocio');
     Route::get('/negocio/reservas', [NegocioController::class, 'reservas'])->name('negocio.reservas');
     Route::get('/negocio/fotos', [NegocioController::class, 'fotos'])->name('negocio.fotos');
     Route::get('/negocio/comunicaciones', [NegocioController::class, 'comunicaciones'])->name('negocio.comunicaciones');
});


////////////////////  ROL Turista/////////////////////////////////////////7
Route::middleware(['auth', 'turista'])->group(function () {
    Route::get('/turista/dashboard-turista', [TuristaController::class, 'index'])->name('turista.dashboard');
    Route::get('/dashboard-turista', [TuristaController::class, 'dashboard'])->name('dashboard');
    Route::get('/negocios', [TuristaController::class, 'explorarNegocios'])->name('explorar.negocios');
    Route::get('/favoritos', [TuristaController::class, 'favoritos'])->name('favoritos');
    Route::get('/reservas', [TuristaController::class, 'reservas'])->name('reservas');
    Route::get('/comentarios', [TuristaController::class, 'comentarios'])->name('comentarios');
    Route::get('/perfil', [TuristaController::class, 'perfil'])->name('perfil');
    
    
    // Route::get('/turista/dashboard-turista', [TuristaController::class, 'index'])->name('turista.dashboard-turista');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



