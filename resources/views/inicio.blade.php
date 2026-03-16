@extends('layouts.main')

@section('contenido')

<h2>Noticias</h2>

<x-noticia 
titulo="Nueva exposición pictórica"
fecha="06 febrero 2026"
imagen="imagenes/noticia1.jpg"/>

<x-noticia 
titulo="Inicio de programa universitario"
fecha="21 enero 2026"
imagen="imagenes/noticia2.jpg"/>

@endsection