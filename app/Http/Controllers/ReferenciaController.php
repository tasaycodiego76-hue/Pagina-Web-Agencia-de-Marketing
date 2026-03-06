<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenciaController extends Controller
{
    // Ruta del archivo JSON donde se guardan las referencias
    private function jsonPath()
    {
        return storage_path('app/referencias.json');
    }

    // Leer todas las referencias del JSON
    private function leerReferencias()
    {
        $path = $this->jsonPath();

        // Si el archivo no existe, lo creamos vacío
        if (!file_exists($path)) {
            file_put_contents($path, json_encode([]));
        }

        $contenido = file_get_contents($path);
        return json_decode($contenido, true) ?? [];
    }

    // Guardar todas las referencias en el JSON
    private function guardarReferencias(array $referencias)
    {
        file_put_contents($this->jsonPath(), json_encode($referencias, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    // Recibe el formulario y guarda la nueva referencia
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $referencias = $this->leerReferencias();

        // Agregamos la nueva referencia con aprobado = false
        $referencias[] = [
            'id'         => time(), // ID único basado en timestamp
            'nombre'     => $request->name,
            'comentario' => $request->message,
            'foto'       => 'cliente.png',
            'cargo'      => 'Cliente Nuevo',
            'aprobado'   => false, // No se muestra hasta que cambies a true
        ];

        $this->guardarReferencias($referencias);

        return redirect('/contacto')->with('success', '¡Gracias por tu comentario!');
    }
}