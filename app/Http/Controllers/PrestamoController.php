<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        $prestamos = Prestamo::with(['usuario', 'libro'])->get();
        return view('prestamos.index', compact('prestamos', 'usuarios', 'libros'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('prestamos.create', compact('usuarios', 'libros'));
    }

    public function store(Request $request)
    {

        Prestamo::create([
            'usuario_id' => $request->usuario_id,
            'libro_id' => $request->libro_id,
            'fecha_prestamo' => $request->fecha_prestamo,
        ]);

        return redirect()->route('prestamos.index')->with('success', 'Préstamo realizado con éxito.');
    }

    public function show($id)
    {
        $prestamo = Prestamo::with(['usuario', 'libro'])->findOrFail($id);
        return view('prestamos.show', compact('prestamo'));
    }

    public function devolver($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo->update(['fecha_devolucion' => now()]);
        return redirect()->route('prestamos.index')->with('success', 'Libro devuelto con éxito.');
    }
}
