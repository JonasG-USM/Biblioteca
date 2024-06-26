@extends('layouts.app')

@section('title', 'Editar Libro')

@section('content')
<div class="container mt-5">
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" required>
        </div>
        <div class="form-group">
            <label for="categoria_id">Categoría</label>
            <select class="form-control" id="categoria_id" name="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $libro->categoria_id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
