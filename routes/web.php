<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/oferta', function () {
    return view('oferta');
});

Route::get('/investigacion', function () {
    return view('investigacion');
});

Route::get('/vinculacion', function () {
    return view('vinculacion');
});
