@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection
@section('content')
    <div class="container mb-3">
        <div class="row">
        <div class="col-6">
        <a href="{{route('cliente.create')}}" title="Crear Nuevo" class="btn btn-outline-info"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    
    

    <table class="table table-dark table-striped" id="myTable">
        <thead>
            <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Fecha Nacimiento</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>Fecha Registro</td>
            <td>Genero</td>
            <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->fecha_nacimiento}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->fecha_registro}}</td>
                    <td>{{$cliente->genero}}</td>
                    <td>
                    <div class="row">
                        <a href="{{route('cliente.edit', $cliente->id)}}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt fa-lg"></i></a>
                    
                    <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="confirmarEliminacion(event)"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </form>
                </td>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container mb-3">
        <div class="row">
        <div class="col-6">
        <a href="{{route('index')}}" title="Volver" class="btn btn-outline-primary"><i class="fa fa-reply" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'Aceptar',
                    timer: 3000
                });
            });
        </script>
    @endif

        <script>
            function confirmarEliminacion(event) {
                event.preventDefault();
                const form = event.target.closest('form');
        
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }
        </script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                // Opciones personalizadas, si las necesitas
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
                }
            });
        });
    </script>
@stop