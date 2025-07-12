@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Estado')

@section('content_header')
    <h1 class="texto-brillante text-center">Estado</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="container">
        <a href="{{route('estado.create')}}" title="Crear Nuevo" class="btn btn-outline-info mb-3"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>

    <table class="table table-dark table-striped" id="myTable">
        <thead>
            <tr>
            <td>ID</td>
            <td>Descripcion</td>
            <td>opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
                <tr>
                <td>{{$estado->id}}</td>                
                <td>{{$estado->descripcion}}</td>
                <td>
                    <a href="{{route('estado.edit', $estado->id)}}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt fa-lg"></i></a>
                    
                    <form action="{{route('estado.destroy', $estado->id)}}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="confirmarEliminacion(event)"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container mt-3">
        <a href="{{route('index')}}" title="Volver" class="btn btn-outline-primary mb-3"><i class="fa fa-reply" aria-hidden="true"></i></a>
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