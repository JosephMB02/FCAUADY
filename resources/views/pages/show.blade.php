@extends('layouts.secondary')

@section('titulo', $title)

@section('descripcion')
{{ $description }}
@endsection

@section('contenido')
    @if (! empty($stats))
        <section class="rounded-[2rem] bg-[#002f6c] p-8 text-white shadow-xl">
            <div class="grid gap-4 md:grid-cols-3">
                @foreach ($stats as $stat)
                    <x-stat-card :value="$stat['value']" :label="$stat['label']" />
                @endforeach
            </div>
        </section>
    @endif

    @if (! empty($cards))
        <section class="mt-10 grid gap-6 lg:grid-cols-3">
            @foreach ($cards as $card)
                <x-feature-card
                    :eyebrow="$card['eyebrow']"
                    :title="$card['title']"
                    :text="$card['text']"
                    :href="$card['href'] ?? null"
                />
            @endforeach
        </section>
    @endif

    @if (! empty($programs))
        <section id="licenciaturas" class="mt-10">
            <div class="mb-6 flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-600">Licenciaturas</p>
                    <h2 class="mt-3 text-3xl font-extrabold text-[#002f6c]">Elige una ruta profesional</h2>
                </div>
                <p class="max-w-2xl leading-7 text-slate-600">
                    Cada programa combina bases disciplinares, experiencias aplicadas y acompanamiento academico para fortalecer tu trayectoria.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-4">
                @foreach ($programs as $program)
                    <a href="{{ route('oferta.programa', $program['slug']) }}" class="group overflow-hidden rounded-[1.5rem] border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <img
                            src="{{ asset($program['image']) }}"
                            alt="{{ $program['imageAlt'] }}"
                            class="h-40 w-full object-cover transition duration-300 group-hover:scale-105"
                        >
                        <div class="p-6">
                            <p class="text-xs font-bold uppercase tracking-[0.22em] text-yellow-600">Licenciatura</p>
                            <h3 class="mt-3 text-xl font-extrabold text-[#002f6c]">{{ $program['shortTitle'] }}</h3>
                            <p class="mt-4 line-clamp-4 leading-7 text-slate-600">{{ $program['description'] }}</p>
                            <span class="mt-6 inline-flex text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition group-hover:text-yellow-700">
                                Ver programa
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    @if (! empty($sections))
        <section class="mt-10 grid gap-6 lg:grid-cols-2">
            @foreach ($sections as $section)
                <article class="flex min-h-56 flex-col items-center justify-center rounded-[1.75rem] border border-slate-200 bg-[#e8eef7] p-8 text-center">
                    <h2 class="text-2xl font-extrabold leading-tight text-[#002f6c]">{{ $section['title'] }}</h2>
                    <p class="mt-4 max-w-2xl leading-8 text-slate-600">{{ $section['content'] }}</p>
                </article>
            @endforeach
        </section>
    @endif

    @if (! empty($cta))
        <section class="mt-10 rounded-[2rem] bg-gradient-to-r from-[#001530] to-[#002f6c] p-8 text-white shadow-xl">
            <div class="grid gap-6 lg:grid-cols-[2fr_1fr] lg:items-center">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.25em] text-yellow-400">Explora mas</p>
                    <h2 class="mt-3 text-3xl font-extrabold">{{ $cta['title'] }}</h2>
                    <p class="mt-4 max-w-3xl leading-8 text-slate-200">{{ $cta['text'] }}</p>
                </div>

                <div class="flex flex-col gap-4">
                    <a href="{{ $cta['primary']['href'] }}" class="inline-flex items-center justify-center rounded-full bg-yellow-400 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-yellow-300">
                        {{ $cta['primary']['label'] }}
                    </a>

                    <a href="{{ $cta['secondary']['href'] }}" class="inline-flex items-center justify-center rounded-full border border-white/40 px-8 py-4 text-sm font-bold uppercase tracking-[0.18em] text-white transition hover:bg-white hover:text-[#002f6c]">
                        {{ $cta['secondary']['label'] }}
                    </a>
                </div>
            </div>
        </section>
    @endif
@endsection
