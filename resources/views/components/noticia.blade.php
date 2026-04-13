<article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:shadow-2xl">
    <div class="relative h-56 overflow-hidden">
        <div class="absolute inset-0 z-10 bg-[#002f6c]/10 transition-all group-hover:bg-transparent"></div>
        <img
            src="{{ asset($imagen) }}"
            alt="{{ $titulo }}"
            class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-105"
        >

        <div class="absolute left-4 top-4 z-20 rounded-md bg-yellow-500 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-[#002f6c] shadow-sm">
            Actualidad
        </div>
    </div>

    <div class="flex flex-grow flex-col p-8">
        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-gray-500">{{ $fecha }}</p>

        <h3 class="mb-4 text-xl font-bold leading-snug text-gray-900 transition-colors group-hover:text-[#002f6c]">
            {{ $titulo }}
        </h3>

        <p class="mb-6 flex-grow text-sm font-light leading-relaxed text-gray-600">
            {{ \Illuminate\Support\Str::limit($contenido, 90) }}
        </p>

        <a href="#" class="mt-auto inline-flex items-center text-sm font-bold uppercase tracking-wider text-[#002f6c] transition-colors hover:text-yellow-600">
            Leer articulo
            <svg class="ml-2 h-4 w-4 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</article>
