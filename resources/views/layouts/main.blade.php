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
<body class="flex min-h-screen flex-col bg-gray-50 text-gray-800 selection:bg-[#002f6c] selection:text-white">
    <x-header />

    <main class="flex-grow">
        @yield('contenido')
    </main>

    <x-footer />
</body>
</html>
