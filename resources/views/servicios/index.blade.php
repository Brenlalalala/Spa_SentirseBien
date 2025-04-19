<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Sentirse Bien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-pink-100 text-gray-800 font-sans">

    {{-- HEADER CON LOGO --}}
    <header class="bg-pink shadow py-4">
        <div class="container mx-auto px-4">
            <a href="{{ url('/') }}" class="inline-block">
                <img src="{{ asset('imagenes/logo.png') }}" alt="Sentirse Bien" class="h-12">
            </a>
        </div>
    </header>

    {{-- SERVICIOS --}}
    @php
        $servicios = [
            'individuales' => [
                'Masajes' => [
                    ['titulo' => 'Masaje Anti-Stress', 'desc' => 'Relaja cuerpo y mente, alivia tensiones.', 'precio' => 8000, 'img' => 'masaje1.jpg'],
                    ['titulo' => 'Descontracturante', 'desc' => 'Alivio profundo de contracturas musculares.', 'precio' => 8500, 'img' => 'masaje2.jpg'],
                    ['titulo' => 'Con Piedras Calientes', 'desc' => 'Terapia con calor para armonizar energías.', 'precio' => 9000, 'img' => 'piedras.jpg'],
                    ['titulo' => 'Circulatorio', 'desc' => 'Estimula circulación y reduce retención de líquidos.', 'precio' => 8500, 'img' => 'circulatorio.jpg'],
                ],
                'Belleza' => [
                    ['titulo' => 'Lifting de Pestaña', 'desc' => 'Realza tus pestañas sin extensiones.', 'precio' => 7000, 'img' => 'lifting.jpg'],
                    ['titulo' => 'Depilación Facial', 'desc' => 'Piel suave, sin vello indeseado.', 'precio' => 4500, 'img' => 'depilacion.jpg'],
                    ['titulo' => 'Manos y Pies', 'desc' => 'Manicure + Pedicure profesional.', 'precio' => 6000, 'img' => 'manos_pies.jpg'],
                ],
                'Faciales' => [
                    ['titulo' => 'Punta de Diamante', 'desc' => 'Microexfoliación profunda para una piel renovada.', 'precio' => 10000, 'img' => 'punta.jpg'],
                    ['titulo' => 'Limpieza + Hidratación', 'desc' => 'Piel fresca, limpia e hidratada.', 'precio' => 9000, 'img' => 'limpieza.jpg'],
                    ['titulo' => 'Criofrecuencia Facial', 'desc' => 'Shock térmico con efecto lifting inmediato.', 'precio' => 12000, 'img' => 'criofacial.jpg'],
                ],
                'Corporales' => [
                    ['titulo' => 'VelaSlim', 'desc' => 'Reduce medidas y celulitis con tecnología avanzada.', 'precio' => 14000, 'img' => 'velaslim.jpg'],
                    ['titulo' => 'DermoHealth', 'desc' => 'Estimula microcirculación y drenaje linfático.', 'precio' => 13000, 'img' => 'dermo.jpg'],
                    ['titulo' => 'Criofrecuencia Corporal', 'desc' => 'Lifting corporal instantáneo.', 'precio' => 13500, 'img' => 'criobody.jpg'],
                    ['titulo' => 'Ultracavitación', 'desc' => 'Técnica reductora para adiposidad localizada.', 'precio' => 12500, 'img' => 'ultra.jpg'],
                ],
            ],
            'grupales' => [
                ['titulo' => 'Hidromasajes Grupales', 'desc' => 'Sesiones compartidas para relajar y conectar.', 'precio' => 15000, 'img' => 'hidro.jpg'],
                ['titulo' => 'Yoga Grupal', 'desc' => 'Clases para armonizar cuerpo y mente.', 'precio' => 8000, 'img' => 'yoga.jpg'],
            ]
        ];
    @endphp

    <main class="container mx-auto px-4 py-10 space-y-16">

        {{-- SERVICIOS INDIVIDUALES --}}
        <section>
            <h2 class="text-3xl font-bold text-pink-500 mb-6">Servicios Individuales</h2>

            @foreach($servicios['individuales'] as $categoria => $items)
                <div class="mb-10">
                    <h3 class="text-2xl font-semibold text-pink-600 mb-4">{{ $categoria }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($items as $servicio)
                            <div class="bg-white rounded-lg shadow p-6 text-center">
                                <img src="{{ asset('img/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="w-full h-48 object-cover rounded mb-4">
                                <h4 class="text-xl font-bold text-pink-600">{{ $servicio['titulo'] }}</h4>
                                <p class="text-gray-600 mt-2 mb-4">{{ $servicio['desc'] }}</p>
                                <span class="block text-lg font-semibold text-pink-500">${{ number_format($servicio['precio'], 0, ',', '.') }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </section>

        {{-- SERVICIOS GRUPALES --}}
        <section>
            <h2 class="text-3xl font-bold text-pink-500 mb-6">Servicios Grupales</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($servicios['grupales'] as $servicio)
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <img src="{{ asset('img/' . $servicio['img']) }}" alt="{{ $servicio['titulo'] }}" class="w-full h-48 object-cover rounded mb-4">
                        <h4 class="text-xl font-bold text-pink-600">{{ $servicio['titulo'] }}</h4>
                        <p class="text-gray-600 mt-2 mb-4">{{ $servicio['desc'] }}</p>
                        <span class="block text-lg font-semibold text-pink-500">${{ number_format($servicio['precio'], 0, ',', '.') }}</span>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <footer class="bg-gray-200 text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Sentirse Bien. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
