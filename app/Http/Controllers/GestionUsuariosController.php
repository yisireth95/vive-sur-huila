<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionUsuariosController extends Controller
{
    public function index()
    {
        // Aquí puedes cargar los usuarios desde la base de datos
        // $usuarios = User::all(); // O puedes aplicar filtros si es necesario
        
        // Retorna la vista pasando los usuarios
        return view('gestion-usuarios');
    }
}
