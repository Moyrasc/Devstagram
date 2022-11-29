<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Validación 
        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:40',
            'password' => 'required|confirmed|min:8'
        ]);
        dd('creando usuario...');
    }
}
