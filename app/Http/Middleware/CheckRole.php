<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
     public function handle(Request $request, Closure $next, $role)
     {
     if (Auth::check() && Auth::user()->rol === $role) {
        return $next($request);
    }

    return redirect('/login'); // O redirigir a la página que desees
}

}