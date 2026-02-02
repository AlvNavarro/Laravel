@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-header bg-warning"><h3>Editar Empleado</h3></div>
<div class="card-body">
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Nombre Completo</label><input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control"></div>
        <div class="form-group"><label>Puesto</label><input type="text" name="puesto" value="{{ $empleado->puesto }}" class="form-control"></div>
        <div class="form-group"><label>Email</label><input type="email" name="email" value="{{ $empleado->email }}" class="form-control"></div>
        <div class="form-group"><label>Teléfono</label><input type="text" name="telefono" value="{{ $empleado->telefono }}" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div></div>
@stop