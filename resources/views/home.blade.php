<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentirse bien - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-y: auto;
            scroll-snap-type: y mandatory;
        }

        section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            scroll-snap-align: start;
        }

        #section1 {
            background-image: url('/imagenes/imagen_Fondo.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        #section2,
        #section3 {
            background-color: #f0f8ff;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            background: transparent;
            transition: background 0.3s ease;
        }

        header nav a {
            position: relative;
            color: white;
            text-decoration: none;
        }

        header nav a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out 0s;
        }

        header nav a:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }
    </style>
</head>

<body class="font-sans">

    <header class="py-4">
        <nav class="container mx-auto px-4 flex items-center justify-end">
            <div class="space-x-4">
                <a href="/conocenos" class="text-white hover:text-gray-300 text-xl">Conócenos</a>
                <a href="/servicios" class="text-white hover:text-gray-300 text-xl">Servicios</a>
                <a href="#" id="mostrar-contacto" class="text-white hover:text-gray-300 text-xl">Consultas</a>
                <a href="#" id="login-button" class="text-white hover:text-gray-300 text-xl">Iniciar sesión</a>
            </div>
        </nav>
    </header>

    <section id="section1">
        <div class="flex items-center justify-center h-full">
            <div class="flex flex-col items-center justify-center" style="transform: translateY(10%);">
                <h2 class="text-5xl font-bold text-white mb-4 text-center" style="text-shadow: 9px 9px 9px rgba(0, 0, 0, 0.5);">SENTIRSE BIEN</h2>
                <p class="text-3xl text-white mb-8 text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">RELAJAR - RESTAURAR - REVIVIR</p>
                <a href="/servicios" class="mt-8 bg-pink-500 hover:bg-pink-700 text-white font-bold py-3 px-6 rounded-lg text-xl transition duration-300 ease-in-out transform hover:scale-105">AGENDAR CITA</a>
            </div>
        </div>
    </section>

    <section id="section2">
        <div class="text-center">
            <h2>Contenido de la sección 2</h2>
        </div>
    </section>

    <section id="section3">
        <div id="formulario-contacto" class="container mx-auto p-8 hidden">
            <h1 class="text-3xl font-bold mb-6 text-center text-pink-600">Contáctanos</h1>

            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="mensaje" class="block text-gray-700 text-sm font-bold mb-2">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" rows="4" class="w-full px-3 py-2 border rounded" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            // Este es el contenido de la sección 3 con las redes sociales
            
        </div>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

    <div id="login-modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                        Iniciar sesión
                    </h3>
                    <div class="mt-2">
                        <form>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico</label>
                                <input type="email" id="email" class="w-full px-3 py-2 border rounded" placeholder="Tu correo electrónico">
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                <input type="password" id="password" class="w-full px-3 py-2 border rounded" placeholder="Tu contraseña">
                            </div>
                            <div class="flex items-center justify-between">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Iniciar sesión
                                </button>
                                <a href="#" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="close-modal" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="/login.js"></script>
    <script>
        const botonMostrarContacto = document.getElementById('mostrar-contacto');
        const formularioContacto = document.getElementById('formulario-contacto');

        botonMostrarContacto.addEventListener('click', (event) => {
            event.preventDefault(); // Evita la recarga de la página
            formularioContacto.classList.remove('hidden');
        });
    </script>
</body>

</html>