<article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
    
    <div class="h-56 overflow-hidden relative">
        <div class="absolute inset-0 bg-[#002f6c]/10 group-hover:bg-transparent transition-all z-10"></div>
        <img src="{{ asset($imagen) }}" alt="{{ $titulo }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">
        
        <div class="absolute top-4 left-4 z-20 bg-yellow-500 px-3 py-1.5 rounded-md text-[10px] font-bold text-[#002f6c] uppercase tracking-widest shadow-sm">
            Actualidad
        </div>
    </div>
    
    <div class="p-8 flex flex-col flex-grow">
        <p class="text-xs text-gray-500 font-semibold mb-3 uppercase tracking-wider">{{ $fecha }}</p>
        
        <h3 class="text-xl font-bold text-gray-900 mb-4 leading-snug group-hover:text-[#002f6c] transition-colors">
            {{ $titulo }}
        </h3>
        
        <p class="text-gray-600 text-sm font-light leading-relaxed mb-6 flex-grow">
            {{ \Illuminate\Support\Str::limit($contenido, 90) }}
        </p>
        
        <a href="#" class="inline-flex items-center text-[#002f6c] font-bold text-sm uppercase tracking-wider hover:text-yellow-600 transition-colors mt-auto">
            Leer artículo 
            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</article>