@extends('adminlte::page')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado de Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Nuevo Empleado</a>
    </div>
@stop
@section('content')
    <div class="card"><div class="card-body">
        <table class="table table-hover">
            <thead class="bg-navy">
                <tr><th>Nombre</th><th>Puesto</th><th>Email</th><th width="150px">Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->puesto }}</td>
                        <td>{{ $empleado->email }}</td>
                        <td>
                            <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Borrar?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div></div>
@stop