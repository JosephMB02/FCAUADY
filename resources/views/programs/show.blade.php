@extends('layouts.secondary')

@section('titulo', $title)

@section('descripcion')
{{ $description }}
@endsection

@section('contenido')
    <section class="overflow-hidden rounded-[2rem] bg-gradient-to-r {{ $accent }} text-white shadow-xl">
        <div class="grid gap-0 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="p-8 md:p-10">
                <p class="text-base font-bold uppercase tracking-[0.25em] text-yellow-300">Oferta Educativa</p>
                <h2 class="mt-4 text-3xl font-extrabold leading-tight md:text-4xl">{{ $shortTitle }}</h2>
                <p class="mt-5 leading-8 text-slate-100">{{ $profile }}</p>

                <div class="mt-8 grid gap-4 sm:grid-cols-3">
                    @foreach ($stats as $stat)
                        <x-stat-card :value="$stat['value']" :label="$stat['label']" />
                    @endforeach
                </div>
            </div>

            <img
                src="{{ asset($image) }}"
                alt="{{ $imageAlt }}"
                class="h-96 w-full object-cover lg:h-full"
            >
        </div>
    </section>

    <section class="mt-10 grid gap-6 lg:grid-cols-3">
        <article class="rounded-[1.5rem] border border-slate-200 bg-[#e8eef7] p-7 lg:col-span-2">
            <h2 class="text-2xl font-extrabold text-[#002f6c]">Lo que desarrollas</h2>
            <div class="mt-5 grid gap-4 sm:grid-cols-2">
                @foreach ($skills as $skill)
                    <div class="flex min-h-32 items-center justify-center rounded-2xl bg-white p-5 text-center shadow-sm">
                        <p class="leading-7 text-slate-600">{{ $skill }}</p>
                    </div>
                @endforeach
            </div>
        </article>

        <article class="rounded-[1.5rem] border border-slate-200 bg-white p-7 shadow-sm">
            <h2 class="text-2xl font-extrabold text-[#002f6c]">Campo profesional</h2>
            <ul class="mt-5 space-y-4 text-slate-600">
                @foreach ($fields as $field)
                    <li class="border-l-4 border-yellow-500 pl-4 leading-7">{{ $field }}</li>
                @endforeach
            </ul>
        </article>
    </section>

    <section class="mt-10 rounded-[1.75rem] border border-slate-200 bg-white p-8 shadow-sm">
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div>
                <p class="text-base font-bold uppercase tracking-[0.25em] text-yellow-600">Ruta formativa</p>
                <h2 class="mt-3 text-3xl font-extrabold text-[#002f6c]">Una formación progresiva y aplicada</h2>
            </div>
            <a href="/oferta" class="inline-flex items-center justify-center rounded-full border border-[#002f6c] px-6 py-3 text-sm font-bold uppercase tracking-[0.18em] text-[#002f6c] transition hover:bg-[#002f6c] hover:text-white">
                Volver a oferta
            </a>
        </div>

        <div class="mt-8 grid gap-5 md:grid-cols-4">
            @foreach ($curriculum as $index => $item)
                <article class="flex min-h-40 flex-col items-center justify-center rounded-[1.25rem] bg-slate-50 p-5 text-center">
                    <p class="text-base font-extrabold text-yellow-600">0{{ $index + 1 }}</p>
                    <p class="mt-3 leading-7 text-slate-600">{{ $item }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-10 rounded-[2rem] bg-gradient-to-r from-[#001530] to-[#002f6c] p-8 text-white shadow-xl">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-base font-bold uppercase tracking-[0.25em] text-yellow-400">También puedes explorar</p>
                <h2 class="mt-3 text-3xl font-extrabold">Licenciaturas de la FCA UADY</h2>
            </div>

            <div class="flex flex-wrap gap-3">
                @foreach ($programs as $program)
                    <a
                        href="{{ route('oferta.programa', $program['slug']) }}"
                        class="rounded-full border px-5 py-3 text-sm font-bold uppercase tracking-[0.16em] transition {{ $program['slug'] === $slug ? 'border-yellow-400 bg-yellow-400 text-[#002f6c]' : 'border-white/35 text-white hover:bg-white hover:text-[#002f6c]' }}"
                    >
                        {{ $program['shortTitle'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
