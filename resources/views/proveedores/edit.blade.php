@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-header bg-warning"><h3>Editar Proveedor</h3></div>
<div class="card-body">
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Nombre Empresa</label><input type="text" name="nombre" value="{{ $proveedor->nombre }}" class="form-control"></div>
        <div class="form-group"><label>Contacto</label><input type="text" name="contacto" value="{{ $proveedor->contacto }}" class="form-control"></div>
        <div class="form-group"><label>Email</label><input type="email" name="email" value="{{ $proveedor->email }}" class="form-control"></div>
        <div class="form-group"><label>Teléfono</label><input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div></div>
@stop