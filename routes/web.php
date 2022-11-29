<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// closure
Route::get('/', function () {
    return view('principal');
});
// controladores
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
