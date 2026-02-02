@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-body">
    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <div class="form-group"><label>Nº Factura</label><input type="text" name="numero" class="form-control" required></div>
        <div class="form-group"><label>ID Cliente</label><input type="number" name="cliente_id" class="form-control" placeholder="Ej: 1" required></div>
        <div class="form-group"><label>Fecha</label><input type="date" name="fecha" class="form-control" required></div>
        <div class="form-group"><label>Total (€)</label><input type="number" step="0.01" name="total" class="form-control" required></div>
        <button type="submit" class="btn btn-success">Generar Factura</button>
    </form>
</div></div>
@stop