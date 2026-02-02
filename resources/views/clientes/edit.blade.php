@extends('adminlte::page')
@section('title', 'Editar Cliente')
@section('content_header') <h1>Editar Cliente</h1> @stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $cliente->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
@stop