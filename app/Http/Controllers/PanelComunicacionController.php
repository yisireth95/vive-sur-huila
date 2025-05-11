<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelComunicacionController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar lógica para obtener datos si es necesario.
        // Por ejemplo: $comunicaciones = Comunicacion::all();

        return view('panel-comunicacion');
    }
}
