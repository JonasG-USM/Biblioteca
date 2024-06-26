@extends('layouts.app')

@section('title', 'Detalle del Libro')

@section('content')
<div class="container mt-5">
    <h1>Detalle del Libro</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $libro->id }}</td>
        </tr>
        <tr>
            <th>Título</th>
            <td>{{ $libro->titulo }}</td>
        </tr>
        <tr>
            <th>Autor</th>
            <td>{{ $libro->autor }}</td>
        </tr>
        <tr>
            <th>Categoría</th>
            <td>{{ $libro->categoria->nombre }}</td>
        </tr>
    </table>
    <a href="{{ route('libros.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
