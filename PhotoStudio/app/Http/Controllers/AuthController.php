<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige al dashboard
            return redirect()->route('dashboard');
        } else {
            // Autenticación fallida, redirige de nuevo al formulario de inicio de sesión
            return redirect()->route('login')->with('error', 'Credenciales inválidas');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
