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
                                    <button onclick="abrirModalDia('{{ $servicio->nombre }}')"
                                        class="mt-4 bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 transition">
                                        Reservar
                                    </button>


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

    {{-- MODALES DEL CALENDARIO --}}
    {{-- MODAL: Selección de día --}}
    <div id="modal-dia" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Selecciona una fecha</h2>
            <input type="date" id="fecha-seleccionada" class="w-full border border-pink-300 p-2 rounded mb-4">
            <div class="flex justify-between">
                <button id="cancelar-dia" class="bg-gray-400 text-white px-4 py-2 rounded">Cancelar</button>
                <button id="confirmar-dia" class="bg-pink-500 text-white px-4 py-2 rounded">Confirmar</button>
            </div>
        </div>
    </div>

    {{-- MODAL: Selección de horario --}}
    <div id="modal-horario" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Selecciona un horario</h2>
            <div id="horarios-disponibles" class="mb-4"></div>
            <div class="text-right">
                <button id="cancelar-horario" class="bg-gray-400 text-white px-4 py-2 rounded">Cancelar</button>
            </div>
        </div>
    </div>

         {{-- Script MODAL CALENDARIO --}}
    <script>
    let servicioSeleccionado = '';

    function abrirModalDia(servicio) {
        servicioSeleccionado = servicio;
        const modalDia = document.getElementById('modal-dia');
        if (modalDia) {
            modalDia.classList.remove('hidden');
        }
    }

    document.getElementById('cancelar-dia')?.addEventListener('click', () => {
        document.getElementById('modal-dia').classList.add('hidden');
    });

    document.getElementById('confirmar-dia')?.addEventListener('click', () => {
        const fecha = document.getElementById('fecha-seleccionada').value;
        if (!fecha) {
            alert('Por favor selecciona una fecha.');
            return;
        }

        const horarios = ['10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM'];
        const contenedorHorarios = document.getElementById('horarios-disponibles');
        contenedorHorarios.innerHTML = '';

        horarios.forEach(horario => {
            const boton = document.createElement('button');
            boton.textContent = horario;
            boton.className = 'block w-full bg-pink-500 text-white px-4 py-2 rounded mb-2';
            boton.addEventListener('click', () => {
                alert(`Has reservado "${servicioSeleccionado}" para el día ${fecha} a las ${horario}.`);
                document.getElementById('modal-horario').classList.add('hidden');
            });
            contenedorHorarios.appendChild(boton);
        });

        document.getElementById('modal-dia').classList.add('hidden');
        document.getElementById('modal-horario').classList.remove('hidden');
    });

    document.getElementById('cancelar-horario')?.addEventListener('click', () => {
        document.getElementById('modal-horario').classList.add('hidden');
    });
</script>
</body>
</html>
