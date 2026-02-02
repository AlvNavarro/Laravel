@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-body">
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group"><label>Nombre Completo</label><input type="text" name="nombre" class="form-control" required></div>
        <div class="form-group"><label>Puesto</label><input type="text" name="puesto" class="form-control"></div>
        <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control"></div>
        <div class="form-group"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div></div>
@stop