<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentirse bien - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
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

        #section2, #section3 {
            background-color: #fbb6ce;
        }

        .btn-nav {
            @apply text-white text-xl px-4 py-2 rounded transition duration-300;
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-nav:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #fbb6ce;
        }

        #main-header.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @keyframes fade-in {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
        animation: fade-in 1s ease-out;
        }

        #scrollTopBtn {
        font-size: 1.5rem;
        line-height: 1;
        }


    </style>
</head>


<body class="font-sans">

<header id="main-header" class="py-2 bg-opacity-80 backdrop-blur-md shadow fixed w-full z-50">
    <nav class="container mx-auto px-4 flex items-center justify-between">
        <!-- Logo con animación -->
        <a href="/" class="transform transition-transform duration-500 hover:scale-105">
            <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
        </a>

        <!-- Botón hamburguesa móvil -->
        <button id="menu-toggle" class="md:hidden text-pink-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

            <!-- Menú -->
        <div id="nav-links" class="hidden md:flex space-x-4 items-center">
            <a href="/conocenos" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Conócenos</a>
            <a href="/servicios" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Servicios</a>
            <a href="#" id="mostrar-contacto" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Consultas</a>
            <a href="#" id="login-button" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white">Iniciar sesión</a>
        </div>


    </nav>
</header>


<section id="section1">
    <div class="flex items-center justify-center h-full">
        <div class="flex flex-col items-center justify-center space-y-6" style="transform: translateY(10%);">
            
            <!-- LOGO -->
            <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-2 w-auto animate-fade-in">

            <!-- TÍTULO -->
            <h2 class="text-5xl font-bold text-white text-center" style="text-shadow: 9px 9px 9px rgba(0, 0, 0, 0.5);">SENTIRSE BIEN</h2>

            <!-- SUBTÍTULO -->
            <p class="text-3xl text-white text-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">RELAJAR - RESTAURAR - REVIVIR</p>

            <!-- BOTÓN -->
            <a href="/servicios" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-3 px-6 rounded-lg text-xl transition duration-300 ease-in-out transform hover:scale-105">AGENDAR CITA</a>
        </div>
    </div>
</section>


    <section id="section2">
        <div class="text-center">
            <h2>Contenido en construcción: aquí encontraras paquetes y promociones</h2>
        </div>
    </section>

    <section id="section3">
        <div id="formulario-contacto" class="container mx-auto p-8 hidden ">
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

        <div class="text-center mt-8">
            <!-- Redes sociales o contenido adicional -->
             <h3>Redes sociales o contenido adicional</h3>
        </div>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

    <div id="login-modal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Iniciar sesión</h3>
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
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                    Iniciar sesión
                                </button>
                                <a href="#" class="text-blue-500 hover:text-blue-800 text-sm font-bold">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="close-modal" type="button" class="w-full inline-flex justify-center rounded-md bg-pink-500 text-white font-medium px-4 py-2 hover:bg-pink-600">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function () {

    // Mostrar/ocultar formulario de contacto
    const botonMostrarContacto = document.getElementById('mostrar-contacto');
    const formularioContacto = document.getElementById('formulario-contacto');

    botonMostrarContacto.addEventListener('click', function (event) {
        event.preventDefault();
        formularioContacto.classList.toggle('hidden');
    });

    // Menú hamburguesa móvil
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', function () {
        navLinks.classList.toggle('hidden');
    });

    // Header scroll background y scroll top
    const header = document.getElementById('main-header');
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        if (scrollTopBtn) {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.remove('hidden');
            } else {
                scrollTopBtn.classList.add('hidden');
            }
        }
    });

    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Modal login
    const loginButton = document.getElementById('login-button');
    const loginModal = document.getElementById('login-modal');
    const closeModal = document.getElementById('close-modal');

    loginButton.addEventListener('click', function (e) {
        e.preventDefault();
        loginModal.classList.remove('hidden');
    });

    closeModal.addEventListener('click', function () {
        loginModal.classList.add('hidden');
    });

    // 🔁 Cambiar fondo dinámicamente en section1
    const fondo = document.getElementById('section1');

    const imagenes = [
        '/imagenes/imagen_Fondo.jpeg',
        '/imagenes/fondo1.jpg',
        '/imagenes/fondo2.jpg',
        '/imagenes/fondo3.jpg'
    ];

    let indice = 0;

    setInterval(() => {
        indice = (indice + 1) % imagenes.length;
        fondo.style.backgroundImage = `url('${imagenes[indice]}')`;
    }, 5000); // Cambia cada 5 segundos
});
</script>



</body>

</html>
