@php
    $links = [
        ['label' => 'Oferta Educativa', 'href' => route('oferta'), 'active' => request()->routeIs('oferta') || request()->routeIs('oferta.programa')],
        ['label' => 'Aspirantes', 'href' => route('aspirantes'), 'active' => request()->routeIs('aspirantes')],
        ['label' => 'Estudiantes', 'href' => route('estudiantes'), 'active' => request()->routeIs('estudiantes')],
        ['label' => 'Investigación', 'href' => route('investigacion'), 'active' => request()->routeIs('investigacion')],
    ];

    $facultadLinks = [
        ['label' => 'Nuestra Facultad', 'href' => route('nuestra-facultad'), 'active' => request()->routeIs('nuestra-facultad')],
        ['label' => 'Vinculación', 'href' => route('vinculacion'), 'active' => request()->routeIs('vinculacion')],
        ['label' => 'Internacionalización', 'href' => route('internacionalizacion'), 'active' => request()->routeIs('internacionalizacion')],
        ['label' => 'Egresados', 'href' => route('egresados'), 'active' => request()->routeIs('egresados')],
    ];

    $navId = 'site-nav-' . uniqid();
@endphp

<header class="sticky top-0 z-50 bg-white/95 shadow-sm backdrop-blur-md">
    <div class="container mx-auto flex flex-wrap items-center justify-between gap-4 px-6 py-4">
        <a href="/" class="group flex min-w-0 items-center gap-4">
            <img
                src="{{ asset('images/logo-uady.png') }}"
                alt="Logo FCA UADY"
                class="h-12 w-auto transition-transform group-hover:scale-105 sm:h-14"
            >

            <h1 class="border-l-2 border-yellow-500 pl-4 text-base font-bold leading-tight tracking-tight text-[#002f6c] sm:text-xl">
                Facultad de Contaduría<br>
                <span class="text-sm font-medium text-gray-600 sm:text-lg">y Administración</span>
            </h1>
        </a>

        <button
            type="button"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#002f6c]/20 text-2xl font-semibold leading-none text-[#002f6c] transition hover:border-yellow-500 hover:text-yellow-600 lg:hidden"
            data-nav-toggle
            data-nav-target="{{ $navId }}"
            aria-controls="{{ $navId }}"
            aria-expanded="false"
            aria-label="Abrir menú de navegación"
        >
            <span aria-hidden="true" data-nav-icon>&#9776;</span>
        </button>

        <nav
            id="{{ $navId }}"
            class="hidden w-full flex-col gap-2 rounded-2xl border border-slate-100 bg-white p-3 text-sm font-semibold text-[#002f6c] shadow-lg lg:flex lg:w-auto lg:max-w-[72%] lg:flex-row lg:flex-wrap lg:items-center lg:justify-end lg:gap-4 lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none"
            data-nav-menu
        >
            <a
                href="{{ route('home') }}"
                class="rounded-xl border px-4 py-3 transition-colors lg:rounded-full lg:py-2 {{ request()->routeIs('home') ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                @if (request()->routeIs('home')) aria-current="page" @endif
            >
                Inicio
            </a>

            <details class="rounded-xl border border-transparent px-4 py-3 lg:hidden {{ collect($facultadLinks)->contains('active', true) ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : '' }}">
                <summary class="cursor-pointer list-none font-semibold">
                    Nuestra Facultad
                    <span aria-hidden="true" class="ml-1 text-yellow-600">&#9662;</span>
                </summary>

                <div class="mt-3 grid gap-2 border-t border-slate-100 pt-3">
                    @foreach ($facultadLinks as $link)
                        <a
                            href="{{ $link['href'] }}"
                            class="rounded-xl px-3 py-2 transition-colors {{ $link['active'] ? 'bg-yellow-100 text-yellow-700' : 'hover:bg-slate-50 hover:text-yellow-700' }}"
                            @if ($link['active']) aria-current="page" @endif
                        >
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </details>

            <div class="group relative hidden lg:block">
                <button
                    type="button"
                    class="rounded-full border px-4 py-2 transition-colors {{ collect($facultadLinks)->contains('active', true) ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                    aria-haspopup="true"
                >
                    Nuestra Facultad
                    <span aria-hidden="true" class="ml-1 text-yellow-600">&#9662;</span>
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
                    class="rounded-xl border px-4 py-3 transition-colors lg:rounded-full lg:py-2 {{ $link['active'] ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-transparent hover:border-yellow-500 hover:text-yellow-600' }}"
                    @if ($link['active']) aria-current="page" @endif
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>

    <script>
        (() => {
            const buttons = Array.from(document.querySelectorAll('[data-nav-toggle]'));

            buttons.forEach((button) => {
                if (button.dataset.ready === 'true') {
                    return;
                }

                button.dataset.ready = 'true';

                const menu = document.getElementById(button.dataset.navTarget);
                const icon = button.querySelector('[data-nav-icon]');

                button.addEventListener('click', () => {
                    const isOpen = button.getAttribute('aria-expanded') === 'true';

                    button.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                    button.setAttribute('aria-label', isOpen ? 'Abrir menú de navegación' : 'Cerrar menú de navegación');
                    icon.innerHTML = isOpen ? '&#9776;' : '&times;';
                    menu?.classList.toggle('hidden', isOpen);
                    menu?.classList.toggle('flex', !isOpen);
                });
            });
        })();
    </script>
</header>
