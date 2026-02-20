@extends('adminlte::page')
@section('content')
<div class="card card-navy">
    <div class="card-header"><h3>Nuevo Proveedor</h3></div>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group"><label>Empresa</label><input type="text" name="nombre_empresa" class="form-control" required></div>
            <div class="form-group"><label>Contacto</label><input type="text" name="contacto" class="form-control" required></div>
            <div class="form-group"><label>Teléfono</label><input type="text" name="telefono" class="form-control" required></div>
            <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control" required></div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-primary">Guardar</button></div>
    </form>
</div>
@stop