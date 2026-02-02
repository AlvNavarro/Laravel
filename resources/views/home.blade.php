@extends('adminlte::page')

@section('title', 'CRMNAVARRO | Inicio')

@section('content_header')
    <h1 class="m-0 text-dark">Panel de Control - CRMNAVARRO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info shadow">
                <div class="inner"><h3>5</h3><p>Clientes Registrados</p></div>
                <div class="icon"><i class="fas fa-users"></i></div>
                <a href="{{ route('clientes.index') }}" class="small-box-footer">Gestionar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success shadow">
                <div class="inner"><h3>5</h3><p>Facturas Emitidas</p></div>
                <div class="icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <a href="{{ route('facturas.index') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning shadow">
                <div class="inner"><h3>5</h3><p>Productos en Stock</p></div>
                <div class="icon"><i class="fas fa-box"></i></div>
                <a href="{{ route('productos.index') }}" class="small-box-footer">Inventario <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger shadow">
                <div class="inner"><h3>5</h3><p>Proveedores</p></div>
                <div class="icon"><i class="fas fa-truck"></i></div>
                <a href="{{ route('proveedores.index') }}" class="small-box-footer">Ver lista <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-navy">
            <h3 class="card-title">Bienvenido al Sistema CRMNAVARRO</h3>
        </div>
        <div class="card-body">
            <p>Has iniciado sesión correctamente. Utiliza el menú lateral para gestionar los diferentes módulos del negocio.</p>
        </div>
    </div>
@stop