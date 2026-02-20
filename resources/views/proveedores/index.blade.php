@extends('adminlte::page')

@section('content_header')
    <h1>Directorio de Proveedores</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Añadir Proveedor</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Contacto</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->nombre_empresa }}</td>
                            <td>{{ $proveedor->contacto }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td>{{ $proveedor->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop