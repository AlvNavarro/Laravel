@extends('adminlte::page')

@section('title', 'Listado de Clientes')

@section('content_header')
    <h1>Gestión de Clientes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de clientes registrados</h3>
            <div class="card-tools">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Nuevo Cliente
                </a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th> {{-- Nueva Columna --}}
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>
                                @if($cliente->foto)
                                    <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto" style="width: 50px; height: 50px;" class="img-circle">
                                @else
                                    <img src="{{ asset('vendor/adminlte/dist/img/user2-160x160.jpg') }}" alt="Sin Foto" style="width: 50px; height: 50px;" class="img-circle">
                                @endif
                            </td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-info btn-sm">Editar</a>
                                
                                {{-- Control de Permisos: Solo Admin puede borrar --}}
                                @if(auth()->user()->role == 'admin')
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Requisito: Paginación --}}
            <div class="mt-3">
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                "paging": false, // Desactivamos la paginación de JS para usar la de Laravel
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                }
            });
        });
    </script>
@stop