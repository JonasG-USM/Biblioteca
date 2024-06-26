@extends('layouts.app')

@section('title', 'Detalle del Préstamo')

@section('content')
<div class="container mt-5">
    <h1>Detalle del Préstamo</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $prestamo->id }}</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>{{ $prestamo->usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Libro</th>
            <td>{{ $prestamo->libro->titulo }}</td>
        </tr>
        <tr>
            <th>Fecha de Préstamo</th>
            <td>{{ $prestamo->fecha_prestamo }}</td>
        </tr>
        <tr>
            <th>Fecha de Devolución</th>
            <td>{{ $prestamo->fecha_devolucion ?? 'No devuelto' }}</td>
        </tr>
    </table>
    <a href="{{ route('prestamos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
