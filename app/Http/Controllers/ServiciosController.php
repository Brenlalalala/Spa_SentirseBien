<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicios'));
    }

    public function guardarServicio(Request $request)
    {
        // 1. Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric|min:0',
        ]);

        // 2. Crear una nueva instancia del modelo Servicio
        $servicio = new Servicio();
        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->precio = $request->input('precio');
        // Asigna los otros campos aquí

        // 3. Guardar el servicio en la base de datos
        $servicio->save();

        // 4. Redireccionar o mostrar un mensaje de éxito
        return redirect('/servicios')->with('success', 'Servicio guardado exitosamente.'); // Redirige a la página de servicios con un mensaje
    }

}