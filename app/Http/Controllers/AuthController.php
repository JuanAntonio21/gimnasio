<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
      public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Obtener los datos del formulario
        $username = $request->input('username');
        $password = $request->input('password');

        // Buscar el usuario en la tabla users_login
        $user = UserLogin::where('username', $username)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && password_verify($password, $user->password)) {
            // Autenticación exitosa, redirigir al usuario a la página de inicio
            return redirect()->route('inicio');
        } else {
            // Autenticación fallida, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
            return redirect()->route('registro')->with('error', 'Credenciales incorrectas');
        }
    }
}