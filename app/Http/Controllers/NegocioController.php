<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NegocioController extends Controller
{
    public function dashboard()
    {
        // $negocio = auth()->user()->negocio;  // Obtener el negocio del usuario autenticado
        // $comentarios = Comentario::where('negocio_id', $negocio->id)->latest()->limit(5)->get();  // Obtener los últimos comentarios

        return view('/negocio/dashboard-negocio');
    }
}
