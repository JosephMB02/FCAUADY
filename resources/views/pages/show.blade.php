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
                />
            @endforeach
        </section>
    @endif

    @if (! empty($sections))
        <section class="mt-10 grid gap-6 lg:grid-cols-2">
            @foreach ($sections as $section)
                <article class="rounded-[1.75rem] border border-slate-100 bg-slate-50 p-8">
                    <h2 class="text-2xl font-extrabold text-[#002f6c]">{{ $section['title'] }}</h2>
                    <p class="mt-4 leading-8 text-slate-600">{{ $section['content'] }}</p>
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
