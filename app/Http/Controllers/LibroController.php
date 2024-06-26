<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $categorias = DB::table('categorias')->get();
        return view('libros.create',compact('categorias'));
    }

    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('libros.index');
    }

    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro)
    {
        $categorias = DB::table('categorias')->get();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    public function update(Request $request, Libro $libro)
    {
        $libro->update($request->all());
        return redirect()->route('libros.index');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}