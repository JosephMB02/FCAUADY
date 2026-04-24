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
                'label' => 'Ver oferta',
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
                'label' => 'Ver aspirantes',
                'href' => '/aspirantes',
            ],
            'secondary' => [
                'label' => 'Explora la facultad',
                'href' => '/nuestra-facultad',
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
                'label' => 'Ver estudiantes',
                'href' => '/estudiantes',
            ],
            'secondary' => [
                'label' => 'Ver internacionalizacion',
                'href' => '/internacionalizacion',
            ],
        ],
    ];
@endphp

<x-galeria :slides="$slidesHero" altura="h-[85vh] min-h-[720px] sm:min-h-[680px]" />

<section class="bg-white px-6 py-20">
    <div class="container mx-auto">
        <div class="mb-12 md:text-center">
            <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">Accesos Institucionales</p>
            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-[#002f6c]">Explora las areas clave de la FCA UADY</h2>
        </div>

        <div class="grid gap-6 lg:grid-cols-4">
            @foreach ($accesos as $acceso)
                <x-feature-card
                    :eyebrow="$acceso['eyebrow']"
                    :title="$acceso['title']"
                    :text="$acceso['text']"
                    :href="$acceso['href']"
                    action="Ir a la seccion"
                />
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#001530] px-6 py-20">
    <div class="container mx-auto">
        <div class="mb-12 md:text-center">
            <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-400">Perfil Institucional</p>
            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-white">Una experiencia mas completa y conectada con la vida universitaria</h2>
        </div>

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($indicadores as $indicador)
                <x-stat-card :value="$indicador['value']" :label="$indicador['label']" />
            @endforeach
        </div>
    </div>
</section>

<section class="bg-slate-50 px-6 py-20">
    <div class="container mx-auto">
        <div class="mb-12 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">Oferta y Proyeccion</p>
                <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-[#002f6c]">Formacion, investigacion y vinculacion en un mismo ecosistema</h2>
            </div>
            <a href="/oferta" class="inline-flex items-center justify-center rounded-full border border-[#002f6c] px-6 py-3 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-[#002f6c] hover:text-white">
                Ver mas
            </a>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($programas as $programa)
                <x-feature-card
                    :eyebrow="$programa['eyebrow']"
                    :title="$programa['title']"
                    :text="$programa['text']"
                    :href="$programa['href']"
                />
            @endforeach
        </div>
    </div>
</section>

<div id="noticias" class="container mx-auto px-6 py-24 bg-gray-50">
    <div class="mb-16 md:text-center">
        <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">Actualidad</p>
        <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-[#002f6c]">Noticias destacadas</h2>
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

<section class="bg-white px-6 py-20">
    <div class="container mx-auto">
        <div class="mb-12 md:text-center">
            <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">Agenda Institucional</p>
            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-[#002f6c]">Actividades que fortalecen la comunidad universitaria</h2>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($agenda as $item)
                <article class="rounded-[1.75rem] border border-slate-100 bg-slate-50 p-8 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-yellow-600">{{ $item['meta'] }}</p>
                    <h3 class="mt-3 text-2xl font-extrabold text-[#002f6c]">{{ $item['title'] }}</h3>
                    <p class="mt-4 leading-8 text-slate-600">{{ $item['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="vida-estudiantil" class="bg-white px-6 py-20">
    <div class="mx-auto max-w-5xl rounded-[2rem] bg-gradient-to-r from-[#002f6c] to-[#001530] p-10 text-white shadow-2xl">
        <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-yellow-400">Vida Estudiantil</p>
        <h2 class="text-3xl font-extrabold md:text-4xl">Una comunidad que aprende, participa y transforma.</h2>
        <p class="mt-5 max-w-3xl text-lg font-light leading-8 text-slate-200">
            En la FCA UADY, la formacion universitaria se complementa con actividades academicas, culturales y de integracion que fortalecen el desarrollo integral del estudiantado.
        </p>

        <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a href="/estudiantes" class="inline-flex items-center justify-center rounded-full bg-yellow-400 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-yellow-300">
                Ver estudiantes
            </a>
            <a href="/internacionalizacion" class="inline-flex items-center justify-center rounded-full border border-white/40 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-white transition hover:bg-white hover:text-[#002f6c]">
                Ver internacionalizacion
            </a>
        </div>
    </div>
</section>
@endsection
