<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController 
{
    public function login(Request $request)
    {
        // Validar que el email y la contraseña estén presentes en el formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intentar autenticar al usuario
        $credentials = $request->only('email', 'password');

        // Verificar si las credenciales son correctas
        if (Auth::attempt($credentials)) {
            // Si es exitoso, redirige al usuario a la página de 'logados'
            return redirect()->route('logados');
        } else {
            // Si las credenciales son incorrectas, redirige de nuevo al login con un mensaje de error
            return redirect()->route('login')
                ->withErrors(['email' => 'Las credenciales son incorrectas.'])
                ->withInput();
        }
    }
}