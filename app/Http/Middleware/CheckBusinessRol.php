<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckBusinessRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirigir a login si no está autenticado
        }

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Verificar si el rol del usuario es 'negocio'
        if ($user->rol !== 'negocio') {
            return redirect()->route('home')->with('error', 'Acceso denegado. Este panel es solo para negocios.');
        }

        return $next($request);
    }
}
