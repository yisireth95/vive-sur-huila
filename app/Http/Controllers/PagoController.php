<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para obtener los pagos desde la base de datos, si es necesario.
        return view('pagos');
    }
}
