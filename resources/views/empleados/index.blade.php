@extends('adminlte::page')

@section('content_header')
    <h1>Plantilla de Empleados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('empleados.create') }}" class="btn btn-primary">Registrar Empleado</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Fecha Ingreso</th>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->puesto }}</td>
                            <td>{{ $empleado->fecha_ingreso }}</td>
                            <td>{{ number_format($empleado->salario, 2) }}€</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop