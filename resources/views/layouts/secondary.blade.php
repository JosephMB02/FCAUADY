<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - @yield('titulo', 'Pagina')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="flex min-h-screen flex-col bg-gray-50 text-gray-800 selection:bg-[#002f6c] selection:text-white">
    <x-header />

    <main class="flex-grow">
        <section class="bg-[#001530] px-6 py-16 text-white">
            <div class="container mx-auto">
                <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-yellow-400">FCA UADY</p>
                <h1 class="max-w-4xl text-4xl font-extrabold leading-tight md:text-5xl">@yield('titulo')</h1>
                @isset($heroSlides)
                    <x-image-carousel :slides="$heroSlides" />
                @endisset
                @isset($heroImage)
                    <img
                        src="{{ asset($heroImage['src']) }}"
                        alt="{{ $heroImage['alt'] }}"
                        class="mt-8 h-96 w-full max-w-6xl rounded-[1.5rem] object-cover shadow-2xl ring-1 ring-white/15 md:h-[30rem]"
                        style="object-position: {{ $heroImage['position'] ?? 'center 45%' }};"
                    >
                @endisset
                @hasSection('descripcion')
                    <p class="mt-5 max-w-3xl text-lg font-light leading-8 text-slate-200">@yield('descripcion')</p>
                @endif
            </div>
        </section>

        <section class="container mx-auto px-6 py-16">
            <div class="rounded-[2rem] bg-white p-8 shadow-xl md:p-12">
                @yield('contenido')
            </div>
        </section>
    </main>

    <x-footer />
</body>
</html>
