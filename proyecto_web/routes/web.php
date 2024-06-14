<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', HomeController::class);
Route::get('/usuarios', [UsuariosController::class, 'index']) ->name('usuarios.index');
