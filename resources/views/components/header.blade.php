@php
    $links = [
        ['label' => 'Oferta Educativa', 'href' => route('oferta'), 'active' => request()->routeIs('oferta') || request()->routeIs('oferta.programa')],
        ['label' => 'Aspirantes', 'href' => route('aspirantes'), 'active' => request()->routeIs('aspirantes')],
        ['label' => 'Estudiantes', 'href' => route('estudiantes'), 'active' => request()->routeIs('estudiantes')],
        ['label' => 'Investigacion', 'href' => route('investigacion'), 'active' => request()->routeIs('investigacion')],
    ];

    $facultadLinks = [
        ['label' => 'Nuestra Facultad', 'href' => route('nuestra-facultad'), 'active' => request()->routeIs('nuestra-facultad')],
        ['label' => 'Vinculacion', 'href' => route('vinculacion'), 'active' => request()->routeIs('vinculacion')],
        ['label' => 'Internacionalizacion', 'href' => route('internacionalizacion'), 'active' => request()->routeIs('internacionalizacion')],
        ['label' => 'Egresados', 'href' => route('egresados'), 'active' => request()->routeIs('egresados')],
    ];
@endphp

<header class="sticky top-0 z-50 bg-white/95 shadow-sm backdrop-blur-md">
    <div class="container mx-auto flex flex-col gap-4 px-6 py-4 md:flex-row md:items-center md:justify-between">
        <a href="/" class="group flex items-center gap-4">
            <img
                src="{{ asset('images/logo-uady.png') }}"
                alt="Logo FCA UADY"
                class="h-14 w-auto transition-transform group-hover:scale-105"
            >

            <h1 class="border-l-2 border-yellow-500 pl-4 text-lg font-bold leading-tight tracking-tight text-[#002f6c] sm:text-xl">
                Facultad de Contaduria<br>
                <span class="text-base font-medium text-gray-600 sm:text-lg">y Administracion</span>
            </h1>
        </a>

        <nav class="flex flex-wrap items-center gap-3 text-sm font-semibold text-[#002f6c] md:max-w-[70%] md:justify-end md:gap-4">
            <a
                href="{{ route('home') }}"
                class="rounded-full border px-4 py-2 transition-colors {{ request()->routeIs('home') ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                @if (request()->routeIs('home')) aria-current="page" @endif
            >
                Inicio
            </a>

            <div class="group relative">
                <button
                    type="button"
                    class="rounded-full border px-4 py-2 transition-colors {{ collect($facultadLinks)->contains('active', true) ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                    aria-haspopup="true"
                >
                    Nuestra Facultad
                    <span aria-hidden="true" class="ml-1">▾</span>
                </button>

                <div class="absolute left-0 top-full z-50 hidden min-w-64 pt-3 group-focus-within:block group-hover:block">
                    <div class="rounded-2xl border border-slate-100 bg-white p-2 shadow-xl">
                        @foreach ($facultadLinks as $link)
                            <a
                                href="{{ $link['href'] }}"
                                class="block rounded-xl px-4 py-3 transition-colors {{ $link['active'] ? 'bg-yellow-50 text-yellow-700' : 'hover:bg-slate-50 hover:text-yellow-700' }}"
                                @if ($link['active']) aria-current="page" @endif
                            >
                                {{ $link['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            @foreach ($links as $link)
                <a
                    href="{{ $link['href'] }}"
                    class="rounded-full border px-4 py-2 transition-colors {{ $link['active'] ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                    @if ($link['active']) aria-current="page" @endif
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
