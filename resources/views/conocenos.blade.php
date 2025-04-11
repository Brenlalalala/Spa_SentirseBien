<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conócenos - Sentirse Bien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-sans">

    <header class="bg-pink-100 py-6 shadow">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold text-pink-600">Conócenos</h1>
        </div>
    </header>

    <section class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4">Nuestra Historia</h2>
                <p class="mb-4">Somos un equipo apasionado por el bienestar y el cuidado personal. Desde nuestros inicios, nos hemos enfocado en brindar experiencias relajantes y revitalizantes para cada uno de nuestros clientes.</p>
                <p class="mb-4">Creemos que cuidar de uno mismo no es un lujo, es una necesidad. Por eso creamos espacios, terapias y servicios pensados para restaurar el cuerpo y la mente.</p>
            </div>
            <div>
                <img src="/imagenes/equipo.jpg" alt="Nuestro equipo" class="rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
