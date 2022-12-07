<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //el metodo se manda llamar auto. es como un constructor
    public function __invoke()
    {
        return view('home');
    }
}
