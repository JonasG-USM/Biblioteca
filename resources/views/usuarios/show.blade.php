@extends('layouts.app')

@section('title', 'Detalle del Usuario')

@section('content')
<div class="container mt-5">
    <h1>Detalle del Usuario</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $usuario->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $usuario->email }}</td>
        </tr>
        <tr>
            <th>Rol</th>
            <td>{{ $usuario->role->nombre }}</td>
        </tr>
    </table>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
