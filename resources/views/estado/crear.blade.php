@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1>Crear Estado</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="{{route('estado.index')}}" class="btn btn-primary mb-3">Volver</a>
                <form action="{{route('estado.store')}}" class="form" method="POST">
                    @csrf
                    <label for="descripcion" class="form-label">Estado</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror">
                    <button type="submit" class="btn btn-success mt-3">Guardar</button>
                        @error('descripcion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

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
@stop

@section('js')

@stop