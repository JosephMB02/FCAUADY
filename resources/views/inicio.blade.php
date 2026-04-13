@extends('layouts.main')

@section('titulo', 'Inicio')

@section('contenido')
@php
    $slidesHero = [
        [
            'eyebrow' => 'Facultad de Contaduria y Administracion',
            'h1' => 'Desarrolla tu',
            'h2' => 'potencial al maximo',
            'h3' => 'Formacion universitaria con vision global, liderazgo y compromiso social.',
            'subtitle' => 'En la FCA UADY impulsamos una comunidad academica que integra conocimiento, innovacion y experiencias que preparan para los retos del entorno profesional.',
            'image' => asset('images/fca/fca-principal.jpg'),
            'image_alt' => 'Instalaciones de la Facultad de Contaduria y Administracion de la UADY',
            'image_position' => 'center center',
            'primary' => [
                'label' => 'Ver',
                'href' => '/oferta',
            ],
            'secondary' => [
                'label' => 'Conoce la vida estudiantil',
                'href' => '#vida-estudiantil',
            ],
        ],
        [
            'eyebrow' => 'Excelencia Academica',
            'h1' => 'Programas que',
            'h2' => 'fortalecen tu futuro',
            'h3' => 'Aprendizaje riguroso, acompanamiento docente y vinculacion con el entorno.',
            'subtitle' => 'Nuestra oferta educativa promueve el pensamiento estrategico, la toma de decisiones y la preparacion profesional en un contexto universitario de calidad.',
            'image' => asset('images/fca/fca-simposio.jpg'),
            'image_alt' => 'Actividad academica de la FCA UADY',
            'image_position' => 'center center',
            'primary' => [
                'label' => 'Ver',
                'href' => '/oferta',
            ],
            'secondary' => [
                'label' => 'Conoce la vida estudiantil',
                'href' => '#vida-estudiantil',
            ],
        ],
        [
            'eyebrow' => 'Vida Universitaria',
            'h1' => 'Una comunidad',
            'h2' => 'que inspira y participa',
            'h3' => 'Espacios para aprender, convivir y crecer dentro y fuera del aula.',
            'subtitle' => 'La experiencia estudiantil en la FCA UADY se vive a traves de actividades, proyectos y entornos que fortalecen la identidad universitaria.',
            'image' => asset('images/fca/fca-maf.jpg'),
            'image_alt' => 'Vinculacion y servicios de la FCA UADY',
            'image_position' => 'center center',
            'primary' => [
                'label' => 'Ver',
                'href' => '/oferta',
            ],
            'secondary' => [
                'label' => 'Conoce la vida estudiantil',
                'href' => '#vida-estudiantil',
            ],
        ],
    ];
@endphp

<x-galeria :slides="$slidesHero" altura="h-[85vh] min-h-[720px] sm:min-h-[680px]" />

<div id="noticias" class="container mx-auto px-6 py-24 bg-gray-50">
    <div class="mb-16 md:text-center">
        <h2 class="text-4xl font-extrabold text-[#002f6c] tracking-tight">Noticias Destacadas</h2>
        <div class="mt-6 h-1 w-24 bg-yellow-500 md:mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
        @forelse($noticias as $noticia)
            <x-noticia
                titulo="{{ $noticia->titulo }}"
                fecha="{{ $noticia->created_at ? $noticia->created_at->format('d M Y') : 'Reciente' }}"
                imagen="{{ $noticia->imagen }}"
                contenido="{{ $noticia->contenido }}"
            />
        @empty
            <p class="col-span-4 py-8 text-center text-gray-500">No hay noticias publicadas en este momento.</p>
        @endforelse
    </div>
</div>

<section id="vida-estudiantil" class="bg-white px-6 py-20">
    <div class="mx-auto max-w-5xl rounded-[2rem] bg-gradient-to-r from-[#002f6c] to-[#001530] p-10 text-white shadow-2xl">
        <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-yellow-400">Vida Estudiantil</p>
        <h2 class="text-3xl font-extrabold md:text-4xl">Una comunidad que aprende, participa y transforma.</h2>
        <p class="mt-5 max-w-3xl text-lg font-light leading-8 text-slate-200">
            En la FCA UADY, la formacion universitaria se complementa con actividades academicas, culturales y de integracion que fortalecen el desarrollo integral del estudiantado.
        </p>
    </div>
</section>
@endsection
