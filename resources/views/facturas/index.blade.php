@extends('adminlte::page')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Listado de Facturas</h1>
        <a href="{{ route('facturas.create') }}" class="btn btn-primary">Nueva Factura</a>
    </div>
@stop
@section('content')
    <div class="card"><div class="card-body">
        <table class="table table-hover">
            <thead class="bg-navy">
                <tr><th>Nº Factura</th><th>Total</th><th>ID Cliente</th><th width="150px">Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($facturas as $factura)
                    <tr>
                        <td>{{ $factura->numero }}</td>
                        <td>{{ $factura->total }}€</td>
                        <td>Cliente #{{ $factura->cliente_id }}</td>
                        <td>
                            <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display:inline;">
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