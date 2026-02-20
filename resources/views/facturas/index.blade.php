@extends('adminlte::page')

@section('content_header')
    <h1>Historial de Facturación</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('facturas.create') }}" class="btn btn-warning">Generar Factura</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nº Factura</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $factura)
                        <tr>
                            <td>{{ $factura->numero_factura }}</td>
                            <td>{{ $factura->cliente->nombre }}</td>
                            <td>{{ $factura->fecha }}</td>
                            <td>{{ number_format($factura->total, 2) }}€</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop