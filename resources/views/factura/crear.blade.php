@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1>Crear Factura</h1>
@stop

@section('content')
    <a href="{{route('factura.index')}}" class="btn btn-primary">Volver</a>
    
    <form action="{{route('factura.store')}}" class="form" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label for="idcliente" class="form-label">Cliente</label>
                    <select name="idcliente" id="idcliente" class="form-control @error('idcliente') is-invalid @enderror">
                        <option value="">Seleccione</option>
                        @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}">
                                {{$cliente->nombre  }} 
                                {{$cliente->apellido }}
                            </option>
                        @endforeach
                    </select>
                        @error('idcliente')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror                    
                </div>
                <div class="col-2"></div>
                <div class="col-2"></div>
                <div class="col-2">
                    <label for="fecha" class="form-label"> Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror">
                        @error('fecha')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-6">
                    <label for="idestado" class="form-label">Estado</label>
                    <select name="idestado" id="idestado" class="form-control @error('idestado') is-invalid @enderror">
                        <option value="">Seleccione</option>
                        @foreach ($estados as $estado)
                            <option value="{{$estado->id}}">
                                {{$estado->descripcion}} 
                            </option>
                        @endforeach
                    </select>
                        @error('idestado')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-6">
                    <label for="idpago" class="form-label">Pago</label>
                    <select name="idpago" id="idpago" class="form-control @error('idpago') is-invalid @enderror">
                        <option value="">Seleccione</option>
                        @foreach ($pagos as $pago)
                            <option value="{{$pago->id}}">
                                {{$pago->nombre}} 
                            </option>
                        @endforeach
                    </select>
                        @error('idpago')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-6">
                    <label for="Subtotal" class="form-label">Subtotal</label>
                    <input type="number" name="Subtotal" id="Subtotal" class="form-control @error('Subtotal') is-invalid @enderror">
                        @error('Subtotal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-6">
                    <label for="impuestos" class="form-label">Impuesto</label>
                    <input type="number" name="impuestos" id="impuestos" class="form-control @error('impuestos') is-invalid @enderror">
                        @error('impuestos')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-4 text-right mt-3"><label for="total" class="form-label">Total</label></div>
                <div class="col-4 text-center mt-3">
                    <input type="number" name="total" id="total" class="form-control @error('total') is-invalid @enderror">
                        @error('total')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    <button type="submit" class="btn btn-success mt-3">Guardar</button>
                </div>
                <div class="col-4"></div>
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