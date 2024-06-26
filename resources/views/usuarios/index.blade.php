@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container mt-5">
    <h1>Lista de Usuarios</h1>

    @if(Auth::user()->role_id == 1)
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a> 
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id}}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>

                        @if(Auth::user()->role_id == 1)
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
