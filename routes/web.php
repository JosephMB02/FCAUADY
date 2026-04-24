<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nuestra-facultad', [PageController::class, 'show'])->defaults('page', 'nuestra-facultad')->name('nuestra-facultad');
Route::get('/oferta', [PageController::class, 'show'])->defaults('page', 'oferta')->name('oferta');
Route::get('/aspirantes', [PageController::class, 'show'])->defaults('page', 'aspirantes')->name('aspirantes');
Route::get('/estudiantes', [PageController::class, 'show'])->defaults('page', 'estudiantes')->name('estudiantes');
Route::get('/investigacion', [PageController::class, 'show'])->defaults('page', 'investigacion')->name('investigacion');
Route::get('/vinculacion', [PageController::class, 'show'])->defaults('page', 'vinculacion')->name('vinculacion');
Route::get('/internacionalizacion', [PageController::class, 'show'])->defaults('page', 'internacionalizacion')->name('internacionalizacion');
Route::get('/egresados', [PageController::class, 'show'])->defaults('page', 'egresados')->name('egresados');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
