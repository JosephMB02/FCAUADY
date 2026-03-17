@extends('layouts.main')

@section('titulo', 'Inicio')

@section('contenido')

<div class="relative h-[85vh] bg-[#001530] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-[#002f6c] via-[#002f6c]/80 to-[#001530]/60 z-10"></div>
    
    
    <div class="relative z-20 px-6 max-w-5xl mx-auto w-full text-left md:text-center mt-16">
        <span class="text-yellow-400 font-bold tracking-[0.2em] uppercase text-sm mb-6 block drop-shadow-md">Liderazgo y Emprendimiento</span>
        <h2 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-[1.1] tracking-tight">
            Desarrolla tu <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500 drop-shadow">potencial</span> al máximo.
        </h2>
        <p class="text-xl md:text-2xl text-gray-200 mb-10 font-light max-w-3xl mx-auto">
            Impulsamos el talento para transformar el mundo de los negocios con visión global e innovación académica.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/oferta" class="bg-yellow-500 text-[#002f6c] font-bold py-4 px-10 rounded-full shadow-lg hover:bg-yellow-400 hover:scale-105 transition-all text-sm uppercase tracking-wide text-center">
                Conoce los programas
            </a>
            <a href="/vinculacion" class="border border-yellow-500 text-yellow-500 font-bold py-4 px-10 rounded-full hover:bg-yellow-500 hover:text-[#002f6c] transition-all text-sm uppercase tracking-wide text-center">
                Vida Estudiantil
            </a>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 py-24 bg-gray-50">
    <div class="mb-16 md:text-center">
        <h2 class="text-4xl font-extrabold text-[#002f6c] tracking-tight">Noticias Destacadas</h2>
        <div class="w-24 h-1 bg-yellow-500 mt-6 md:mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @forelse($noticias as $noticia)
            <x-noticia 
                titulo="{{ $noticia->titulo }}"
                fecha="{{ $noticia->created_at ? $noticia->created_at->format('d M Y') : 'Reciente' }}"
                imagen="{{ $noticia->imagen }}"
                contenido="{{ $noticia->contenido }}"
            />
        @empty
            <p class="text-gray-500 col-span-4 text-center py-8">No hay noticias publicadas en este momento.</p>
        @endforelse
    </div>
</div>

@endsection