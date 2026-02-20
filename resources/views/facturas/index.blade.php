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
                        <th>Documento</th> {{-- Nueva columna --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $factura)
                        <tr>
                            <td>{{ $factura->numero_factura }}</td>
                            <td>{{ $factura->cliente->nombre }}</td>
                            <td>{{ $factura->fecha }}</td>
                            <td>{{ number_format($factura->total, 2) }}€</td>
                            <td>
                                {{-- Si existe la ruta del pdf en la base de datos --}}
                                @if($factura->pdf)
                                    <a href="{{ asset('storage/' . $factura->pdf) }}" 
                                       target="_blank" 
                                       class="btn btn-danger btn-sm">
                                        <i class="fas fa-file-pdf"></i> Ver PDF
                                    </a>
                                @else
                                    <span class="badge badge-secondary">Sin PDF</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop