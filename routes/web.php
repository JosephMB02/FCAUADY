<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::view('/oferta', 'oferta')->name('oferta');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
