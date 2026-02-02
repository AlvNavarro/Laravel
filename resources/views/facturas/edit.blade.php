@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-header bg-warning"><h3>Editar Factura</h3></div>
<div class="card-body">
    <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Nº Factura</label><input type="text" name="numero" value="{{ $factura->numero }}" class="form-control"></div>
        <div class="form-group"><label>ID Cliente</label><input type="number" name="cliente_id" value="{{ $factura->cliente_id }}" class="form-control"></div>
        <div class="form-group"><label>Fecha</label><input type="date" name="fecha" value="{{ $factura->fecha }}" class="form-control"></div>
        <div class="form-group"><label>Total (€)</label><input type="number" step="0.01" name="total" value="{{ $factura->total }}" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Actualizar Factura</button>
    </form>
</div></div>
@stop