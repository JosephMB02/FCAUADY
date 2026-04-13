@extends('layouts.secondary')

@section('titulo', 'Pagina no encontrada')

@section('descripcion')
La direccion solicitada no existe o fue escrita de forma incorrecta.
@endsection

@section('contenido')
<div class="mx-auto max-w-3xl text-center">
    <p class="text-lg leading-8 text-slate-600">
        Te invitamos a regresar a la pagina principal para continuar navegando por la informacion de la Facultad de Contaduria y Administracion.
    </p>

    <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">
        <a href="/" class="rounded-full bg-yellow-400 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-yellow-300">
            Ir al inicio
        </a>

        <a href="/oferta" class="rounded-full border border-[#002f6c] px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-[#002f6c] hover:text-white">
            Ver oferta
        </a>
    </div>
</div>
@endsection
