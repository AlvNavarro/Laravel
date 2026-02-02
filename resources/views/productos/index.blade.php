@extends('adminlte::page')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>
@stop
@section('content')
    <div class="card"><div class="card-body">
        <table class="table table-hover">
            <thead class="bg-navy">
                <tr><th>Nombre</th><th>Precio</th><th>Stock</th><th width="150px">Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precio }}€</td>
                        <td>{{ $producto->stock }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
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