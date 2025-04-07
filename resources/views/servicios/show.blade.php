{{-- Este código muestra los detalles de un servicio individual, 
    incluyendo su nombre, imagen, descripción y precio. --}}


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $servicio->nombre }} - Sentirse bien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">

    <header class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">{{ $servicio->nombre }}</h1>
        </div>
    </header>

    <section class="container mx-auto px-4 py-8">
        <img src="{{ $servicio->imagen }}" alt="{{ $servicio->nombre }}" class="rounded-lg mb-4">
        <p class="text-gray-700">{{ $servicio->descripcion }}</p>
        <p class="text-gray-700">Precio: ${{ $servicio->precio }}</p>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

</body>

</html>