<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionNegociosRegiController extends Controller
{
    public function gestionNegocios()
    {
        $negocios = [
            ['id' => 1, 'nombre' => 'Restaurante El Sabor del Sur', 'tipo' => 'Restaurantes'],
            ['id' => 2, 'nombre' => 'Hotel Montañas Verdes', 'tipo' => 'Hoteles'],
            ['id' => 3, 'nombre' => 'Tiendas Artesanías del Sur', 'tipo' => 'Tiendas de artesanías'],
            ['id' => 4, 'nombre' => 'Café del Valle', 'tipo' => 'Restaurantes'],
            ['id' => 5, 'nombre' => 'Hotel El Paraíso', 'tipo' => 'Hoteles']
        ];

        // Enviar los datos a la vista
        return view('gestion-negocios-registrados', compact('negocios'));
    }
    
    }

