<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |----------------------------------------------------------------------
    | Login Controller
    |----------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to their respective dashboards based on roles.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // Este atributo puede ser descomentado si prefieres manejar la redirección globalmente
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirige al usuario según su rol después de iniciar sesión.
     *
     * @return string
     */
    protected function redirectTo()
    {
        // Verifica si el usuario está autenticado antes de hacer la redirección
        if (Auth::check()) {
            // Redirección según el rol del usuario
            switch (Auth::user()->rol) {
                case 'admin':
                    return '/dashboard'; // Redirigir al dashboard del administrador
                case 'negocio':
                    return '/negocio/dashboard-negocio'; // Redirigir al dashboard del negocio
                case 'turista':
                    return '/turista/dashboard-turista'; // Redirigir al dashboard del turista
                default:
                    return '/home'; // Redirigir a la página de inicio si no se encuentra el rol
            }
        }

        // Si el usuario no está autenticado, redirige al login
        return '/login';
    }
}
