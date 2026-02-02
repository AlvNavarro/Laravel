@extends('adminlte::page')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado de Proveedores</h1>
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Nuevo Proveedor</a>
    </div>
@stop
@section('content')
    <div class="card"><div class="card-body">
        <table class="table table-hover">
            <thead class="bg-navy">
                <tr><th>Empresa</th><th>Contacto</th><th>Teléfono</th><th width="150px">Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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