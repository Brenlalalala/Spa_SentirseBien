{{-- Este código muestra la lista de servicios en una cuadrícula de tres 
columnas.
Cada servicio se muestra en una tarjeta con su nombre,
descripción y un enlace para ver más detalles.--}}

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Sentirse bien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">

    <header class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Servicios</h1>
        </div>
    </header>

    <section class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-semibold mb-4">Lista de servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($servicios as $servicio)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h3 class="text-lg font-semibold">{{ $servicio->nombre }}</h3>
                    <p class="text-gray-700">{{ $servicio->descripcion }}</p>
                    <a href="/servicios/{{ $servicio->id }}" class="inline-block mt-2 text-blue-500 hover:underline">Ver más</a>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

</body>

</html>