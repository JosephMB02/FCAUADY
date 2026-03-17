@extends('layouts.main')

@section('contenido')
<div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-8">
    
    <aside class="w-full md:w-1/4 bg-white shadow-lg rounded-xl p-6 h-fit">
        <h3 class="text-xl font-bold text-[#002f6c] mb-4 border-b pb-2">@yield('titulo_menu', 'Opciones')</h3>
        <nav class="flex flex-col space-y-3">
            @yield('opciones_menu')
        </nav>
    </aside>

    <section class="w-full md:w-3/4 bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">@yield('titulo')</h2>
        <div class="prose max-w-none text-gray-600">
            @yield('pagina')
        </div>
    </section>

</div>
@endsection