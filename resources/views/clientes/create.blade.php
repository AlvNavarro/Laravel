@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
    <h1>Crear Nuevo Cliente</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Formulario de registro</h3>
        </div>

        {{-- IMPORTANTE: enctype="multipart/form-data" es obligatorio para subir archivos --}}
        <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ej: Juan Pérez" value="{{ old('nombre') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="juan@ejemplo.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" value="{{ old('telefono') }}" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value="{{ old('direccion') }}" required>
                </div>

                {{-- REQUISITO: Subida de imágenes --}}
                <div class="form-group">
                    <label for="foto">Foto del Cliente (Imagen)</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="foto" accept="image/*">
                            <label class="custom-file-label" for="foto">Seleccionar imagen</label>
                        </div>
                    </div>
                    <small class="text-muted">Formatos: jpg, png, jpeg. Máx: 2MB</small>
                </div>

                {{-- REQUISITO: Gestión de archivos (PDF) --}}
                <div class="form-group">
                    <label for="documento_pdf">Documento Adjunto (PDF)</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="documento_pdf" class="custom-file-input" id="documento_pdf" accept="application/pdf">
                            <label class="custom-file-label" for="documento_pdf">Seleccionar PDF</label>
                        </div>
                    </div>
                    <small class="text-muted">Solo archivos PDF. Máx: 5MB</small>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@stop

@section('js')
    {{-- Este script es para que el nombre del archivo aparezca en el input de AdminLTE al seleccionarlo --}}
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@stop