<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect; // <- se encarga de importar redirect

class AuthenticatedSessionController extends Controller
{
    // Método para manejar la autenticación y redirección de las credenciales
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intenta este codigo autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // Redirige a la lista de productos principales una vez iniciado sesion
            return Redirect::route('productos.index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }
}
