@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="h1 text-center">Editar Producto</h1>
@stop

@section('content')
    <a href="{{route('producto.index')}}" class="btn btn-primary mb-3">Volver</a>
    <div class="container">
        <div class="row">
            <form action="{{route('producto.update', $producto->id)}}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="stock" class="form-label">Stock</label>
                            <input class="form-control"  type="number" name="stock" id="stock" value="{{$producto->stock}}">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control"  type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
                        </div>
                        <div class="col-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="1"
                                @if ($producto->estado == 1)
                                    selected
                                @endif
                                >Disponible</option>
                                <option value="0"
                                @if ($producto->estado == 0)
                                    selected
                                @endif
                                >Agotado</option>
                            </select>
                            <label for="fecha_creacion" class="form-label">Fecha Creacion</label>
                            <input class="form-control"  type="date" name="fecha_creacion" id="fecha_creacion" value="{{$producto->fecha_creacion}}">
                        </div>
                        <div class="col-12">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input class="form-control"  type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
                        </div>
                        <div class="col-6">
                            <label for="idmarca" class="form-label" class="form-label">Marca</label>
                            <select name="idmarca" id="idmarca" class="form-control">
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}"
                                        @if ($marca->id == $producto->idmarca)
                                            selected
                                        @endif
                                        >{{$marca->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio" value="{{$producto->precio}}">
                        </div>
                        <div class="col-6">
                            <label for="idcategoria" class="form-label">Categoria</label>
                            <select name="idcategoria" id="idcategoria" class="form-control">
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}"
                                        @if ($categoria->id == $producto->idcategoria)
                                            selected
                                        @endif
                                        >{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="precio_compra" class="form-label">Precio Compra</label>
                            <input type="number" class="form-control" name="precio_compra" id="precio_compra" value="{{$producto->precio_compra}}">                
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