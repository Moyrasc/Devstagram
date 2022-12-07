<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        //Modificar el request
        //el helper slug convierte el nombre de usuario en formato url..(quita espacios,convierte a minúscula...)
        $request->request->add(['username' => Str::slug($request->username)]);
        // Validación 
        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:40',
            'password' => 'required|confirmed|min:8'
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            //encripta el pass
            'password' => Hash::make($request->password)

        ]);
        //Autenticar usuario :
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        auth()->attempt($request->only('email', 'password'));

        //Redireccionar al usuario
        return redirect()->route('posts.index', auth()->user());
    }
}
