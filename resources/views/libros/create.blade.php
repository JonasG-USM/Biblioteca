@extends('layouts.app')

@section('title', 'Crear Libro')

@section('content')
<div class="container mt-5">
    <h1>Crear Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="categoria_id">Categoría</label>
            <select class="form-control" id="categoria_id" name="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
