@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Registrar Nuevo Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Registro</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ej: Juan Pérez" value="{{ old('nombre') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="juan@ejemplo.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="600 000 000" value="{{ old('telefono') }}" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Calle Ejemplo, 123" value="{{ old('direccion') }}" required>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar Cliente</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop