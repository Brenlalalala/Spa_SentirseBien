<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Sentirse Bien Spa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <div class="container mx-auto p-8">
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

</body>
</html>