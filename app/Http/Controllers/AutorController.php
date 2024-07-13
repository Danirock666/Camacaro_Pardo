<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'isbn' => 'required|unique:libros',
            'cantidad_disponible' => 'required|integer',
        ]);

        Libro::create($validatedData);

        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente.');
    }

    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'isbn' => 'required|unique:libros,isbn,' . $libro->id,
            'cantidad_disponible' => 'required|integer',
        ]);

        $libro->update($validatedData);

        return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
    }
}



