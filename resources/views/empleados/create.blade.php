@extends('adminlte::page')
@section('content')
<div class="card card-info">
    <div class="card-header"><h3>Nuevo Empleado</h3></div>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group"><label>Nombre</label><input type="text" name="nombre" class="form-control" required></div>
            <div class="form-group"><label>Puesto</label><input type="text" name="puesto" class="form-control" required></div>
            <div class="form-group"><label>Fecha Ingreso</label><input type="date" name="fecha_ingreso" class="form-control" required></div>
            <div class="form-group"><label>Salario</label><input type="number" step="0.01" name="salario" class="form-control" required></div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-primary">Guardar</button></div>
    </form>
</div>
@stop