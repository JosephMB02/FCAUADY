@extends('layouts.main')

@section('contenido')

<div class="contenido-menu">

<h2>@yield('titulo')</h2>

<div>
@yield('pagina')
</div>

</div>

@endsection