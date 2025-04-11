<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Aca se puede hacer lo que queramos con los datos: enviar email o guardar

        return back()->with('success', '¡Gracias por contactarnos!');
    }
}
