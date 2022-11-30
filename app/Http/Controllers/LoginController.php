<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //Validación
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Si la validación no es correcta... mensaje de error
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            //back te devuelve a la vista con el mensaje que hemos añadido
            return back()->with('mensaje', 'Email y/o contraseña incorrectos');
        }
        return redirect()->route('posts.index');
    }
}
