<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Proyecto::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('dashboard')->with('success', 'Proyecto creado correctamente.');
    }
}
