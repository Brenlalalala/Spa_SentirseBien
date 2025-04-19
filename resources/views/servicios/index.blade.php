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

<body class="font-sans bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-pink-600">Nuestros Servicios</h1>
        </div>
    </header>

    <!-- Lista de servicios -->
    <main class="container mx-auto px-4 py-10">
        @if($servicios->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($servicios as $servicio)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $servicio->nombre }}</h2>
                        <p class="text-gray-600 mb-3">{{ $servicio->descripcion }}</p>

                        @if($servicio->imagen)
                            <img src="{{ asset('storage/' . $servicio->imagen) }}" alt="{{ $servicio->nombre }}" class="rounded mb-3">
                        @endif

                        <p class="text-pink-600 font-bold text-lg">Precio: ${{ number_format($servicio->precio, 2) }}</p>

                        <a href="{{ route('servicios.show', $servicio->id) }}"
                            class="mt-4 inline-block bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition">
                            Ver más
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600 text-lg">No hay servicios disponibles en este momento.</p>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
