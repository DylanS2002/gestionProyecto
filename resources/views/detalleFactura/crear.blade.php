@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1>Crear Detalle</h1>
@stop

@section('content')
    <a href="{{route('detalleFactura.imdex')}}" class="btn btn-primary">Volver</a>
    <form action="{{route('detalleFactura.store')}}" class="form" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <label for="idfactura" class="formlabel">factura</label>
                    <select name="idfactura" id="idfactura" class="form-control @error('idfactura') is-invalid @enderror">
                        <option value="">Seleccione</option>
                        @foreach ($facturas as $factura)
                            <option value="{{$factura->id}}">
                                {{$factura->cliente->nombre  }} 
                                {{$factura->cliente->apellido }}
                            </option>
                        @endforeach
                    </select>
                        @error('idfactura')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-4">
                    <label for="idproducto" class="formlabel">Producto</label>
                    <select name="idproducto" id="idproducto" class="form-control @error('idproducto') is-invalid @enderror">
                        <option value="">Seleccione</option>
                        @foreach ($productos as $producto)
                            <option value="{{$producto->id}}">
                                {{$producto->nombre  }} 
                            </option>
                        @endforeach
                    </select>
                        @error('idproducto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-4"></div>
                <div class="col-4 mt-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" id="cantidad">
                        @error('cantidad')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-4 mt-3">
                    <label for="preciounitario" class="form-label">Precio c/u</label>
                    <input type="number" class="form-control @error('preciounitario') is-invalid @enderror" name="preciounitario" id="preciounitario">
                        @error('preciounitario')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-4 mt-3">
                    <label for="totalinea" class="form-label">total linea</label>
                    <input type="number" class="form-control @error('totalinea') is-invalid @enderror" name="totalinea" id="totalinea">
                        @error('totalinea')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col text-center mt-3">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
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