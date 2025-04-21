


<script>
    let servicioSeleccionado = '';

    // Función para abrir el modal de selección de día
    function abrirModalDia(servicio) {
        servicioSeleccionado = servicio;
        const modalDia = document.getElementById('modal-dia');
        if (modalDia) {
            modalDia.classList.remove('hidden');
        } else {
            console.error('El modal de selección de día no existe en el DOM.');
        }
    }

    // Cerrar el modal de selección de día
    const cancelarDiaBtn = document.getElementById('cancelar-dia');
    if (cancelarDiaBtn) {
        cancelarDiaBtn.addEventListener('click', () => {
            document.getElementById('modal-dia').classList.add('hidden');
        });
    } else {
        console.error('El botón "Cancelar Día" no existe en el DOM.');
    }

    // Confirmar la selección de día y abrir el modal de horarios
    const confirmarDiaBtn = document.getElementById('confirmar-dia');
    if (confirmarDiaBtn) {
        confirmarDiaBtn.addEventListener('click', () => {
            const fecha = document.getElementById('fecha-seleccionada').value;
            if (!fecha) {
                alert('Por favor selecciona una fecha.');
                return;
            }

            // Generar horarios disponibles
            const horarios = ['10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM'];
            const contenedorHorarios = document.getElementById('horarios-disponibles');
            if (contenedorHorarios) {
                contenedorHorarios.innerHTML = '';

                horarios.forEach(horario => {
                    const boton = document.createElement('button');
                    boton.textContent = horario;
                    boton.className = 'block w-full bg-pink-500 text-white px-4 py-2 rounded mb-2';
                    boton.addEventListener('click', () => {
                        alert(`Has seleccionado el servicio "${servicioSeleccionado}" para el día ${fecha} a las ${horario}.`);
                        document.getElementById('modal-horario').classList.add('hidden');
                    });
                    contenedorHorarios.appendChild(boton);
                });

                document.getElementById('modal-dia').classList.add('hidden');
                document.getElementById('modal-horario').classList.remove('hidden');
            } else {
                console.error('El contenedor de horarios disponibles no existe en el DOM.');
            }
        });
    } else {
        console.error('El botón "Confirmar Día" no existe en el DOM.');
    }

    // Cerrar el modal de horarios
    const cancelarHorarioBtn = document.getElementById('cancelar-horario');
    if (cancelarHorarioBtn) {
        cancelarHorarioBtn.addEventListener('click', () => {
            document.getElementById('modal-horario').classList.add('hidden');
        });
    } else {
        console.error('El botón "Cancelar Horario" no existe en el DOM.');
    }
</script>