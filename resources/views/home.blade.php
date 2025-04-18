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

                /* Excepción para section2: altura automática según contenido */
        #section2 {
            height: auto;
            padding-top: 4rem;
            padding-bottom: 4rem;
            display: block; /* para que el contenido fluya naturalmente */
        }

        #section2, #section3 {
            background-color: #fbb6ce;
        }

        #section3 {
    background-image: url('/imagenes/imagen_contacto.webp');
    background-size: cover; /* Cubre todo el fondo */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita la repetición de la imagen */
    filter: brightness(0.9); /* Ajusta el brillo de la imagen */
           /* ... otros estilos ... */
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
        opacity: 0;
        font-size: 1.5rem;
        line-height: 1;
        z-index: 9999;
        transition: opacity 0.3s ease;
        
        }

        .tarjeta-promocion {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tarjeta-promocion:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .boton-brillante {
            position: relative;
            overflow: hidden;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .boton-brillante::after {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.2) 100%);
            transform: skewX(-25deg);
        }

        .boton-brillante:hover::after {
            animation: shine 0.75s forwards;
        }

        @keyframes shine {
            0% { left: -75%; }
            100% { left: 125%; }
        }

        .boton-brillante {
        position: relative;
        overflow: hidden;
        background-size: 200% auto;
        color: white;
        animation: brillar 2s linear infinite;
        }

        @keyframes brillar {
        0% { background-position: 0% center; }
        100% { background-position: 200% center; }
        }

        .fade-in {
        opacity: 1 !important;
        transition: opacity 0.5s ease-in;
        display: block !important;
        }

        .fade-out {
        opacity: 0 !important;
        transition: opacity 0.5s ease-out;
        display: none !important;
        }

        @keyframes float-up-down {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        .floating {
            animation: float-up-down 2s ease-in-out infinite;
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
            <a href="/conocenos" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white boton-brillante">Conócenos</a>
            <a href="/servicios" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white boton-brillante">Servicios</a>
            <a href="#" id="mostrar-contacto" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white boton-brillante">Consultas</a>
            <a href="#" id="login-button" class="text-white font-semibold px-4 py-2 rounded transition duration-300 hover:bg-pink-500 hover:text-white boton-brillante">Iniciar sesión</a>
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


<section id="section2" class="py-16 bg-pink-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-pink-700 mb-12">Paquetes y Promociones</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Primer paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion1.jpg" alt="Masaje Anti-Stress" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Relax Total</h3>
                <p class="text-gray-700 mb-4">Incluye Masaje Anti-Stress + Limpieza facial profunda + Yoga grupal.</p>
                <span class="text-xl font-bold text-pink-700">$35000 ARS</span>
            </div>

            <!-- Segundo paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion2.jpg" alt="Pack Belleza Total" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Belleza Total</h3>
                <p class="text-gray-700 mb-4">Incluye Lifting de pestañas + Belleza de manos y pies + Depilación facial.</p>
                <span class="text-xl font-bold text-pink-700">$40000 ARS</span>
            </div>

            <!-- Tercer paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion3.jpg" alt="Pack Relax y Detox" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Relax y Detox</h3>
                <p class="text-gray-700 mb-4">Incluye Masaje descontracturante + Punta de diamante (microexfoliación) + Criofrecuencia facial.</p>
                <span class="text-xl font-bold text-pink-700">$52000 ARS</span>
            </div>

            <!-- Cuarto paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion4.jpg" alt="Pack Hidro Spa" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Hidro Spa</h3>
                <p class="text-gray-700 mb-4">Incluye Hidromasajes grupales + Masaje circulatorio + Limpieza facial profunda.</p>
                <span class="text-xl font-bold text-pink-700">$45000 ARS</span>
            </div>

            <!-- Quinto paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion5.jpg" alt="Pack Bienestar Corporal" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Bienestar Corporal</h3>
                <p class="text-gray-700 mb-4">Incluye Ultracavitación + VelaSlim + Yoga grupal.</p>
                <span class="text-xl font-bold text-pink-700">$48000 ARS</span>
            </div>

            <!-- Sexto paquete -->
            <div class="tarjeta-promocion bg-white rounded-lg p-2 text-sm">
                <img src="/imagenes/promocion6.jpg" alt="Pack Anti-Stress Premium" class="rounded mb-4">
                <h3 class="text-2xl font-semibold text-pink-600 mb-2">Pack Anti-Stress Premium</h3>
                <p class="text-gray-700 mb-4">Incluye Masaje con piedras calientes + Criofrecuencia facial + DermoHealth corporal.</p>
                <span class="text-xl font-bold text-pink-700">$60000 ARS</span>
            </div>
        </div>
    </div>
</section>


<section id="section3">
 @include('contacto')
</section>

    
    <div id="scroll-anchor"></div>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

   <!-- Botón login -->
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

    // Desplazar a la sección de contacto (section3) y mostrar/ocultar formulario
const botonMostrarContacto = document.getElementById('mostrar-contacto');
 const formularioContacto = document.getElementById('formulario-contacto');

botonMostrarContacto.addEventListener('click', function (event) {
event.preventDefault(); // Evita el comportamiento predeterminado del enlace
document.getElementById('section3').scrollIntoView({ behavior: 'smooth' });
//formularioContacto.classList.toggle('hidden'); si no se oculta
 });


    // Botón scroll top
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    const scrollAnchor = document.getElementById('scroll-anchor');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                scrollTopBtn.classList.remove('fade-out');
                scrollTopBtn.classList.add('fade-in', 'floating'); // 👈 le agregamos animación
            } else {
                scrollTopBtn.classList.remove('fade-in', 'floating');
                scrollTopBtn.classList.add('fade-out');
            }
        });
        }, {
            root: null,
            threshold: 0.05
        });

    observer.observe(scrollAnchor);
    
     //  Scroll al top 
     scrollTopBtn.addEventListener('click', function () {
    document.getElementById('section1').scrollIntoView({
        behavior: 'smooth'
    });
});

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

    // Cambiar fondo dinámico en section1
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
    }, 5000);
});
</script>

<div id="scrollTopBtn" class="fixed bottom-5 right-5 cursor-pointer z-50 fade-out" title="Volver arriba">
    <img src="/imagenes/flecha-arriba.png" alt="Volver arriba" class="w-12 h-12 drop-shadow-lg">
</div>

</body>

</html>
