<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionSitiosTuriController extends Controller
{
    public function gestionSitios()
    {
        $sitios = [
            (object) ['id' => 1, 'nombre' => 'Sitio Turístico A'],
            (object) ['id' => 2, 'nombre' => 'Sitio Turístico B'],
            (object) ['id' => 3, 'nombre' => 'Sitio Turístico C']
        ];

        // Pasar la variable con datos temporales a la vista
        return view('gestion-sitios-turisticos', compact('sitios'));
    }
}
