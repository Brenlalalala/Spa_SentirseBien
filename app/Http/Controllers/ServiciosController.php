<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Mostrar la vista principal de servicios, agrupados por categoría y subcategoría.
     */
    public function index()
    {
        $serviciosRaw = Servicio::all();

        $servicios = $serviciosRaw
            ->groupBy('categoria')
            ->map(function ($grupo) {
                return $grupo->groupBy('subcategoria');
            });

        return view('servicios.index', compact('servicios'));
    }

    /**
     * Mostrar la vista individual de un servicio específico.
     */
    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Guardar un nuevo servicio desde un formulario.
     */
    public function guardarServicio(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric|min:0',
            'categoria' => 'required|string|max:255',
            'subcategoria' => 'required|string|max:255',
        ]);

        $servicio = new Servicio();
        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->precio = $request->input('precio');
        $servicio->categoria = $request->input('categoria');
        $servicio->subcategoria = $request->input('subcategoria');

        $servicio->save();

        return redirect('/servicios')->with('success', 'Servicio guardado exitosamente.');
    }
}
