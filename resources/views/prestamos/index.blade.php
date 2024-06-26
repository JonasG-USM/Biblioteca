@extends('layouts.app')

@section('title', 'Realizar Préstamo')

@section('content')
<div class="container mt-5">
    <h1>Realizar Préstamo</h1>
    <form action="{{ route('prestamos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <select class="form-control" id="usuario_id" name="usuario_id">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="libro_id">Libro</label>
            <select class="form-control" id="libro_id" name="libro_id">
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_prestamo">Fecha de Préstamo</label>
            <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
