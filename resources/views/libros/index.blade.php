@extends('layouts.app')

@section('title', 'Lista de Libros')

@section('content')
<div class="container mt-5">
    <h1>Lista de Libros</h1>
    <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">Crear Libro</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
