<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuristaController extends Controller
{
    // public function __construct()
    // {
    //     // Aplica el middleware para verificar que el usuario sea turista
    //     $this->middleware('turista');
    // }

    // Método para mostrar el dashboard del turista
    public function index()
    {
        return view('/turista/dashboard-turista');
    }
}
