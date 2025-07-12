@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Facturas')

@section('content_header')
    <h1 class="texto-brillante text-center">Facturas</h1>
@stop
@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="container">
        <a href="{{route('factura.create')}}" title="Crear Nuevo" class="btn btn-outline-info mb-3"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>
    

    <table class="table table-dark table-striped" id="myTable">
        <thead>
            <tr>
                <td>Id</td>
                <td>Cliente</td>
                <td>Estado</td>
                <td>Fecha</td>
                <td>pago</td>
                <td>Subtotal</td>
                <td>Impuestos</td>
                <td>Total</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                <td>{{$factura->id}}</td>
                <td>
                {{$factura->cliente->nombre     }}
                {{$factura->cliente->apellido     }}
                </td>
                <td>{{$factura->estado->descripcion}}</td>
                <td>{{$factura->fecha}}</td>
                <td>{{$factura->modoPago->nombre}}</td>
                <td>{{$factura->Subtotal}}</td>
                <td>{{$factura->impuestos}}</td>
                <td>{{$factura->total}}</td>
                <td>
                    <a href="{{route('factura.edit', $factura->id)}}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt fa-lg"></i></a>
                    <form action="{{route('factura.destroy', $factura->id)}}" class="d-inline" method="POST">
                        @csrf
                        <button class="btn btn-outline-danger " onclick="confirmarEliminacion(event)"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
     <div class="container">
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