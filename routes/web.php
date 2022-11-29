<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// closure
Route::get('/', function () {
    return view('principal');
});
// controlador
Route::get('/crear-cuenta', [RegisterController::class, 'index']);
