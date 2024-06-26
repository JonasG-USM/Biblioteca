@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
<div class="container mt-5">
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>
        <div class="form-group">
            <label for="role_id">Rol</label>
            <select class="form-control" id="role_id" name="role_id">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $role->id == $usuario->role_id ? 'selected' : '' }}>{{ $role->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
