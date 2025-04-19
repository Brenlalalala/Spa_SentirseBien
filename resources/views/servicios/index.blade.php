<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Individuales - Sentirse Bien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-pink-100 text-gray-800 font-sans">

    <header class="bg-white shadow py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-pink-600">Servicios Individuales</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Masajes -->
            @foreach([
                ['titulo' => 'Masaje Anti-Stress', 'desc' => 'Relaja cuerpo y mente, alivia tensiones.', 'precio' => 8000, 'img' => 'masaje1.jpg'],
                ['titulo' => 'Masaje Descontracturante', 'desc' => 'Alivio profundo de contracturas musculares.', 'precio' => 8500, 'img' => 'masaje2.jpg'],
                ['titulo' => 'Masaje con Piedras Calientes', 'desc' => 'Terapia con calor para armonizar energías.', 'precio' => 9000, 'img' => 'piedras.jpg'],
                ['titulo' => 'Masaje Circulatorio', 'desc' => 'Estimula circulación y reduce retención de líquidos.', 'precio' => 8500, 'img' => 'circulatorio.jpg'],
            ] as $servicio)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="rounded mb-3 w-full h-48 object-cover">
                    <h2 class="text-xl font-bold text-pink-600 mb-2">{{ $servicio['titulo'] }}</h2>
                    <p class="text-gray-700 mb-2">{{ $servicio['desc'] }}</p>
                    <p class="text-pink-600 font-bold text-lg">${{ number_format($servicio['precio'], 0) }} ARS</p>
                </div>
            @endforeach

            <!-- Belleza -->
            @foreach([
                ['titulo' => 'Lifting de Pestaña', 'desc' => 'Realza tus pestañas sin extensiones.', 'precio' => 7000, 'img' => 'lifting.jpg'],
                ['titulo' => 'Depilación Facial', 'desc' => 'Piel suave, sin vello indeseado.', 'precio' => 4500, 'img' => 'depilacion.jpg'],
                ['titulo' => 'Belleza de Manos y Pies', 'desc' => 'Manicure + Pedicure profesional.', 'precio' => 6000, 'img' => 'manos_pies.jpg'],
            ] as $servicio)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="rounded mb-3 w-full h-48 object-cover">
                    <h2 class="text-xl font-bold text-pink-600 mb-2">{{ $servicio['titulo'] }}</h2>
                    <p class="text-gray-700 mb-2">{{ $servicio['desc'] }}</p>
                    <p class="text-pink-600 font-bold text-lg">${{ number_format($servicio['precio'], 0) }} ARS</p>
                </div>
            @endforeach

            <!-- Faciales -->
            @foreach([
                ['titulo' => 'Punta de Diamante', 'desc' => 'Microexfoliación profunda para una piel renovada.', 'precio' => 10000, 'img' => 'punta.jpg'],
                ['titulo' => 'Limpieza + Hidratación', 'desc' => 'Piel fresca, limpia e hidratada.', 'precio' => 9000, 'img' => 'limpieza.jpg'],
                ['titulo' => 'Criofrecuencia Facial', 'desc' => 'Shock térmico con efecto lifting inmediato.', 'precio' => 12000, 'img' => 'criofacial.jpg'],
            ] as $servicio)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="rounded mb-3 w-full h-48 object-cover">
                    <h2 class="text-xl font-bold text-pink-600 mb-2">{{ $servicio['titulo'] }}</h2>
                    <p class="text-gray-700 mb-2">{{ $servicio['desc'] }}</p>
                    <p class="text-pink-600 font-bold text-lg">${{ number_format($servicio['precio'], 0) }} ARS</p>
                </div>
            @endforeach

            <!-- Corporales -->
            @foreach([
                ['titulo' => 'VelaSlim', 'desc' => 'Reduce medidas y celulitis con tecnología avanzada.', 'precio' => 14000, 'img' => 'velaslim.jpg'],
                ['titulo' => 'DermoHealth', 'desc' => 'Estimula microcirculación y drenaje linfático.', 'precio' => 13000, 'img' => 'dermo.jpg'],
                ['titulo' => 'Criofrecuencia Corporal', 'desc' => 'Lifting corporal instantáneo.', 'precio' => 13500, 'img' => 'criobody.jpg'],
                ['titulo' => 'Ultracavitación', 'desc' => 'Técnica reductora para adiposidad localizada.', 'precio' => 12500, 'img' => 'ultra.jpg'],
            ] as $servicio)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="rounded mb-3 w-full h-48 object-cover">
                    <h2 class="text-xl font-bold text-pink-600 mb-2">{{ $servicio['titulo'] }}</h2>
                    <p class="text-gray-700 mb-2">{{ $servicio['desc'] }}</p>
                    <p class="text-pink-600 font-bold text-lg">${{ number_format($servicio['precio'], 0) }} ARS</p>
                </div>
            @endforeach

            <!-- Grupales -->
            @foreach([
                ['titulo' => 'Hidromasajes Grupales', 'desc' => 'Sesiones compartidas para relajar y conectar.', 'precio' => 15000, 'img' => 'hidro.jpg'],
                ['titulo' => 'Yoga Grupal', 'desc' => 'Clases para armonizar cuerpo y mente.', 'precio' => 8000, 'img' => 'yoga.jpg'],
            ] as $servicio)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('images/servicios/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="rounded mb-3 w-full h-48 object-cover">
                    <h2 class="text-xl font-bold text-pink-600 mb-2">{{ $servicio['titulo'] }}</h2>
                    <p class="text-gray-700 mb-2">{{ $servicio['desc'] }}</p>
                    <p class="text-pink-600 font-bold text-lg">${{ number_format($servicio['precio'], 0) }} ARS</p>
                </div>
            @endforeach

        </div>
    </main>

    <footer class="bg-gray-200 text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Sentirse Bien. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
