<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacionController extends Controller
{

    public function logIn()
    {

        return view('auth/logIn');
    }

    public function logIning(Request $request)
    {

        $credenciales = $request->only(['password', 'email', 'editor']);

        if (!Auth::attempt($credenciales)) {

            return redirect('/logIn')->with('status.message', 'Revise datos ingresados.')->withInput();
        } elseif (Auth::user()->editor == 1) {

            return redirect('/admin/noticias')->with('status.message', 'Bienvenido ' . Auth::user()->email);
        } else {

            return redirect('/')->with('status.message', 'Bienvenido ' . Auth::user()->email);
        }
    }

    public function logOuting(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status.message', 'Adios');
    }
}
