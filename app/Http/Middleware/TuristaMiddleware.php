<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TuristaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario tiene el rol de 'turista'
        if (auth()->check() && auth()->user()->rol === 'turista') {
            return $next($request); // Si es turista, permite el acceso
        }

        // Si no es turista, redirige a la página de acceso denegado o a otra ruta
        return redirect()->route('home'); // Redirige a la página de inicio o donde desees
    }
}
