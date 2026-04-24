@php
    $links = [
        ['label' => 'Inicio', 'href' => route('home'), 'active' => request()->routeIs('home')],
        ['label' => 'Nuestra Facultad', 'href' => route('nuestra-facultad'), 'active' => request()->routeIs('nuestra-facultad')],
        ['label' => 'Oferta Educativa', 'href' => route('oferta'), 'active' => request()->routeIs('oferta')],
        ['label' => 'Aspirantes', 'href' => route('aspirantes'), 'active' => request()->routeIs('aspirantes')],
        ['label' => 'Estudiantes', 'href' => route('estudiantes'), 'active' => request()->routeIs('estudiantes')],
        ['label' => 'Investigacion', 'href' => route('investigacion'), 'active' => request()->routeIs('investigacion')],
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
