<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referencia;

class ReferenciaController extends Controller
{
    public function store(Request $request)
    {
        // Validamos los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Guardamos en la base de datos
        // Asegúrate de guardar tu imagen como 'cliente.jpg' en public/images/referencia/
        Referencia::create([
            'nombre' => $request->name,
            'comentario' => $request->message,
            'foto' => 'cliente.png', // Tu imagen estándar
            'cargo' => 'Cliente Nuevo', // Puedes personalizar esto o dejarlo fijo
        ]);

        // REDIRECCIÓN: Te manda a la ruta /referencias y salta al ID #referencia
        return redirect('/referencias#referencia')->with('success', '¡Gracias por tu comentario!');
    }
}