@extends('layout')

@section('content')
    <h1>Editar usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="
            form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
            @endsection