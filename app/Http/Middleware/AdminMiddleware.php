<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y si tiene el rol admin
        if (auth()->check() && auth()->user()->rol === 'admin') {
            return $next($request); // Permite el acceso si es admin
        }

        return redirect('/home'); // Redirige si no es admin
    }
}
