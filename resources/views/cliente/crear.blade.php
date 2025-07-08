@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1 class="h1 text-center">Crear Cliente</h1>
@stop

@section('content')
    <a href="{{route('cliente.index')}}" class="btn btn-primary mb-3">Volver</a>
    <div class="container">
        <div class="row">
            <form action="{{route('cliente.store')}}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-4">                            
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control @error('nombre') is-invalid @enderror"  type="text" name="nombre" id="nombre">
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input class="form-control @error('apellido') is-invalid @enderror"  type="text" name="apellido" id="apellido">
                            @error('apellido')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-2">
                            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                            <input class="form-control @error('fecha_nacimiento') is-invalid @enderror"  type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                            @error('fecha_nacimiento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">                            
                            <label for="telefono" class="form-label">Telefono</label>
                            <input class="form-control @error('telefono') is-invalid @enderror"  type="text" name="telefono" id="telefono">
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="genero" class="form-label">genero</label>
                            <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
                                <option value="">seleccione</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                                <option value="Otros">Otros</option>
                            </select>
                            @error('genero')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-2">
                            <label for="fecha_registro" class="form-label">Fecha Registro</label>
                            <input class="form-control @error('fecha_registro') is-invalid @enderror"  type="date" name="fecha_registro" id="fecha_registro">
                            @error('fecha_registro')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input class="form-control @error('direccion') is-invalid @enderror"  type="text" name="direccion" id="direccion">
                            @error('direccion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Correo</label>
                            <input class="form-control @error('email') is-invalid @enderror"  type="text" name="email" id="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                            <button type="submit" class="btn btn-success mt-3">Guardar</button>
                        
                    </div>
                </div>
            </form>
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