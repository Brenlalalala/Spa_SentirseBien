<!DOCTYPE html>
<html lang="es">


<div id="formulario-contacto" class="container mx-auto p-8 mt-20">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 px-4 mt-8">
            <form action="{{ route('contacto.enviar') }}" method="POST" id="formularioContacto">
                @csrf
                <div class="mb-8">
                    <label for="nombre" class="block text-gray-900 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-900 text-sm font-bold mb-2">Número de celular:</label>
                    <input type="tel" name="telefono" id="telefono" class="w-full px-3 py-2 border rounded">
                    <label for="telefono" class="block text-gray-900 text-sm font-bold mb-2">*Sin incluir el número 0 y ni el 15</label>
                </div>
                <div class="mb-4">
                    <label for="mensaje" class="block text-gray-900 text-sm font-bold mb-2">Descripción de consulta:</label>
                    <textarea name="mensaje" id="mensaje" rows="4" class="w-full px-3 py-2 border rounded" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Enviar mensaje</button>
                </div>
            </form>
        </div>
        <div class="w-full md:w-1/2 px-4 mt-20">
            <div>
                <h2 class="text-2xl font-bold mb-4">Información de contacto</h2>
                <p>Dirección: French 414, Ciudad de Resistencia</p>
                <p>Teléfono: +123 456 7890</p>
                <p>Redes sociales:</p>
                <ul class="list-disc list-inside text-lg">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="mt-4">
            </div>
        </div>
    </div>

    <div id="modalResultado" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modalTitulo"></h3>
                    <div class="mt-2">
                        <p id="modalMensaje"></p>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="cerrarModal" type="button" class="w-full inline-flex justify-center rounded-md bg-red-600 text-white font-medium px-4 py-2 hover:bg-red-700">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  document.getElementById('formularioContacto').addEventListener('submit', function(event) {
    event.preventDefault();

    const telefono = document.getElementById('telefono').value;

    if (telefono && telefono.length !== 10) {
        document.getElementById('modalTitulo').textContent = 'Error';
        document.getElementById('modalMensaje').textContent = 'El número de celular debe tener 10 dígitos.';
        document.getElementById('modalResultado').classList.remove('hidden');
        return; // Detiene el envío del formulario
    }

    const formData = new FormData(this);

    fetch('{{ route('contacto.enviar') }}', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error de red: ' + response.status);
        }
        return response.json();
    })
    .then(data => {
        document.getElementById('modalTitulo').textContent = data.success ? 'Mensaje Enviado' : 'Error';
        document.getElementById('modalMensaje').textContent = data.message;
        document.getElementById('modalResultado').classList.remove('hidden');

        if (data.success) {
            // Borra los campos del formulario
            document.getElementById('nombre').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('mensaje').value = '';
        }
    })
    .catch(error => {
        document.getElementById('modalTitulo').textContent = 'Error';
        document.getElementById('modalMensaje').textContent = 'Error de red: ' + error.message;
        document.getElementById('modalResultado').classList.remove('hidden');
    });
});

document.getElementById('cerrarModal').addEventListener('click', function() {
    document.getElementById('modalResultado').classList.add('hidden');
});
</script>
</html>