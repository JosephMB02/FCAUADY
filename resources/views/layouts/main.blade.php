<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA UADY - @yield('titulo', 'Inicio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800 selection:bg-[#002f6c] selection:text-white">

    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 transition-all">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="/" class="flex items-center gap-4 group">
    <img src="{{ asset('images/logo-uady.png') }}" alt="Logo FCA UADY" class="h-14 w-auto group-hover:scale-105 transition-transform">
    
    <h1 class="text-xl font-bold text-[#002f6c] tracking-tight hidden md:block border-l-2 border-yellow-500 pl-4 leading-tight">
        Facultad de Contaduría<br><span class="text-gray-600 font-medium text-lg">y Administración</span>
    </h1>
</a>

           <nav class="hidden md:flex space-x-8 font-medium text-sm text-[#002f6c]">
    <a href="/" class="hover:text-yellow-600 transition-colors border-b-2 border-transparent hover:border-yellow-500 pb-1">Inicio</a>
    <a href="/oferta" class="hover:text-yellow-600 transition-colors pb-1">Oferta Educativa</a>
    
    <a href="javascript:void(0)" class="hover:text-yellow-600 transition-colors pb-1 cursor-default">Investigación</a>
    <a href="javascript:void(0)" class="hover:text-yellow-600 transition-colors pb-1 cursor-default">Vinculación</a>
</nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('contenido')
    </main>

    <footer class="bg-[#001530] text-gray-300 py-16 mt-12 border-t-4 border-yellow-500">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
  <img src="{{ asset('images/logo-uady.png') }}" alt="Logo UADY Blanco" class="h-12 w-auto mb-6 opacity-90 brightness-0 invert">
    <p class="text-sm font-light leading-relaxed mb-6">Formando líderes con visión global, ética y espíritu emprendedor para transformar el entorno.</p>
</div>
            <div>
                <h4 class="text-yellow-500 text-sm font-bold uppercase tracking-wider mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-3 text-sm font-light">
                    <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition-transform">Control Escolar</a></li>
                    <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition-transform">Servicios Generales</a></li>
                    <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition-transform">Tecnologías de Información</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-yellow-500 text-sm font-bold uppercase tracking-wider mb-4">Contacto</h4>
                <p class="text-sm font-light mb-2">comunicacion.fca@correo.uady.mx</p>
                <p class="text-sm font-light mt-8 border-t border-gray-700 pt-4">© UADY 2026. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>