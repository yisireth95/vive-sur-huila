<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesPendientesController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar lógica para obtener datos de las solicitudes pendientes de la base de datos
        // Por ejemplo, algo como: $solicitudes = Solicitud::where('estado', 'pendiente')->get();
        
        return view('solicitudes-pendientes');
    }
}
