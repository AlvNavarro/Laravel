@extends('adminlte::page')
@section('content')
<div class="card"><div class="card-header bg-warning"><h3>Editar Producto</h3></div>
<div class="card-body">
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group"><label>Nombre</label><input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control"></div>
        <div class="form-group"><label>Descripción</label><input type="text" name="descripcion" value="{{ $producto->descripcion }}" class="form-control"></div>
        <div class="form-group"><label>Precio</label><input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control"></div>
        <div class="form-group"><label>Stock</label><input type="number" name="stock" value="{{ $producto->stock }}" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div></div>
@stop