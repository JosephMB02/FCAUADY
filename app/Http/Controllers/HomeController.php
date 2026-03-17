<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia; // Es vital importar el modelo

class HomeController extends Controller
{
    public function index()
    {
        // Extraemos las noticias de la base de datos (Punto 5)
        $noticias = Noticia::orderBy('created_at', 'desc')->get();
        
        return view('inicio', compact('noticias'));
    }
}