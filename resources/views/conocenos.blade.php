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

    <section class="px-4 py-12">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-center">
            <div class="text-justify">
                <h2 class="text-2xl font-bold mb-4">¿Qué es sentirse bien spa?</h2>
                <p class="mb-4">Un equipo guiado por la experiencia, comprometido con tu bienestar</p>
                <p class="mb-4">En Sentirse Bien creemos que la belleza y el bienestar nacen del equilibrio entre el cuidado profesional y la calidez humana.</p>
                <p class="mb-4">Fundado por la <strong>Dra. Felicidad</strong>, reconocida profesional con una amplia trayectoria en el ámbito de la salud y la estética, nuestro spa es el resultado de años de dedicación, formación y pasión por acompañar a las personas en su camino hacia el bienestar integral.</p>
                <p class="mb-4">La Dra. Felicidad lidera y supervisa personalmente a un equipo de profesionales altamente cualificados, comprometidos con brindar una atención de excelencia en cada tratamiento. Cada integrante de nuestro staff comparte los mismos valores: vocación de servicio, empatía, profesionalismo y amor por lo que hacemos.</p>
                <p class="mb-4">En Sentirse Bien, combinamos técnicas innovadoras, experiencia clínica y un enfoque personalizado para que cada visita sea una experiencia transformadora.</p>
                <p class="mb-4">Estamos acá para acompañarte a sentirte bien, por dentro y por fuera.</p>
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