@extends('adminlte::page')
@section('content')
<div class="card card-warning">
    <div class="card-header"><h3>Generar Factura</h3></div>
    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group"><label>Nº Factura</label><input type="text" name="numero_factura" class="form-control" required></div>
            <div class="form-group">
                <label>Cliente</label>
                <select name="cliente_id" class="form-control">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group"><label>Fecha</label><input type="date" name="fecha" class="form-control" required></div>
            <div class="form-group"><label>Total</label><input type="number" step="0.01" name="total" class="form-control" required></div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-primary">Crear Factura</button></div>
    </form>
</div>
@stop