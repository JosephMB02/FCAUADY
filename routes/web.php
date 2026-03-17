<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Importar el controlador

// Usamos el controlador para la ruta principal
Route::get('/', [HomeController::class, 'index']);

Route::get('/oferta', function () { return view('oferta'); });
