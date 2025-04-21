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
    <header id="main-header" class="sticky top-0 w-full z-50 transition-transform duration-300 bg-opacity-80 backdrop-blur-md">
        <nav class="px-4 flex items-center justify-between" style="background-color: #fbb6ce;">
            <a href="/" class="transform transition-transform duration-500 hover:scale-105">
                <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
            </a>

            <button id="menu-toggle" class="md:hidden text-pink-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div id="nav-links" class="hidden md:flex space-x-4 items-center">
                <a href="/conocenos" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Conócenos</a>
                <a href="/servicios" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Servicios</a>
                <a href="#" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Consultas</a>
                <a href="#" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Iniciar sesión</a>
            </div>
        </nav>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="container mx-auto px-4 py-10 pt-[220px] space-y-16">

        @if(isset($servicios))
            @foreach($servicios as $categoria => $subcategorias)
                <section>
                    <h2 class="text-3xl font-bold text-pink-500 mb-6">
                        Servicios {{ ucfirst($categoria) }}
                    </h2>

                    @foreach($subcategorias as $subcategoria => $items)
                        <h3 class="text-2xl font-semibold text-pink-400 mt-8 mb-4">• {{ $subcategoria }}</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($items as $servicio)
                                @php
                                    $nombreArchivoImagen = Str::slug($servicio->nombre) . '.jpg';
                                    $rutaImagen = asset('imagenes/' . $nombreArchivoImagen);
                                @endphp
                                    <div class="bg-white rounded-xl p-4 text-sm text-center shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out h-full flex flex-col justify-between min-h-[28rem]">
                                        <img src="{{ $rutaImagen }}" alt="{{ $servicio->nombre }}" class="w-full h-40 object-cover rounded-lg mb-4">

                                     <div class="flex-grow">
                                         <h4 class="text-xl font-bold text-pink-600">{{ $servicio->nombre }}</h4>

                                            <p class="text-gray-600 mt-2 mb-4">
                                                 {{ $servicio->descripcion ?? 'Servicio personalizado y de alta calidad.' }}
                                            </p>
                                    </div>

                                @if($servicio->precio)
                                    <span class="block text-lg font-bold text-pink-500 mt-auto">
                                        ${{ number_format($servicio->precio, 0, ',', '.') }} ARS
                                    </span>
                                @endif
                            </div>

                            @endforeach
                        </div>
                    @endforeach
                </section>
            @endforeach
        @else
            <p class="text-center text-gray-600">No hay servicios disponibles en este momento.</p>
        @endif

    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-200 text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Sentirse Bien. Todos los derechos reservados.</p>
    </footer>

    {{-- HEADER OCULTO AL SCROLL --}}
    <script>
        let lastScroll = 0;
        const header = document.getElementById('main-header');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > lastScroll && currentScroll > 100) {
                header.classList.add('-translate-y-full');
            } else {
                header.classList.remove('-translate-y-full');
            }

            lastScroll = currentScroll;
        });
    </script>

</body>
</html>
