@extends('adminlte::page')

@section('title', 'ELITEfox-Crea')

@section('content_header')
    <h1>Crear Modo de pago</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{route('modoPago.index')}}" class="btn btn-primary">Volver</a>
                <form action="{{route('modoPago.store')}}" class="form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre">
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="activo" class="form-label">Activo</label>
                        <select name="activo" id="activo" class="form-control @error('activo') is-invalid @enderror">
                            <option value="">Seleccione</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                        @error('activo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion">
                        @error('descripcion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    <button type="submit" class="btn btn-success mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
     <style>
        .main-sidebar {
            background-image: url("https://i.pinimg.com/736x/19/d9/b5/19d9b576468ba999e2c49582a5879599.jpg");
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center;
}
    </style>

    <style>
        .content-wrapper {
            background-image: url("https://img.freepik.com/foto-gratis/primer-plano-pared-marmol-blanco-textura_53876-139849.jpg?semt=ais_items_boosted&w=740");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            color: #c19d44;
        }
    </style>
    <style>
        .main-header {
            background-image: url("https://media.istockphoto.com/id/1471197299/es/foto/textura-de-pared-de-lujo-de-mármol-negro-y-dorado-con-patrón-de-línea-dorada-brillante-diseño.jpg?s=612x612&w=0&k=20&c=UzevK4naddrICZDJYcgn6YHckyCRfkenizZdDgurup8=");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: black !important;
        }

        .main-header .nav-link, 
        .main-header .navbar-nav .nav-item > a {
            color: #c19d44 !important;
        }
    </style>
    <style>
        .preloader {
            background-color: #000000; /* Cambia esto al color que quieras */
        }

        .preloader img {
            filter: drop-shadow(0 0 5px #c19d44); /* Efecto visual opcional */
        }
    </style>

    <style>
        .nav-sidebar .nav-link {
            transition: color 0.3s, text-shadow 0.3s;
        }

        .nav-sidebar .nav-link:hover {
            color: #fff;
            text-shadow: 0 0 8px #c19d44, 0 0 12px #c19d44; /* color neón azul */
        }
    </style>
     <style>
        .nav-sidebar .nav-link {
            transition: color 0.3s ease-in-out;
        }

        .nav-sidebar .nav-link:hover {
            color: #c19d44; /* texto se ilumina con otro color */
        }
    </style>

     <style>
        .nav-sidebar .nav-link:hover {
            color: #fff;
            text-shadow:
                0 0 5px #c19d44,
                0 0 10px #c19d44,
                0 0 20px #c19d44,
                0 0 40px #c19d44;
        }
    </style>

    <style>
        .nav-sidebar .nav-link {
            color: #ccc; /* color base */
            transition: color 0.3s ease;
        }

        .nav-sidebar .nav-link:hover {
            color: #c19d44 !important; /* color al pasar el mouse */
        }
    </style>

    <style>

        .nav-sidebar .nav-link.active {
            background-color: #c19d44; /* Color cuando está activo */
            color: #fff;
        }
    </style>
@section('js')

@stop