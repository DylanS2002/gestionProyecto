@extends('adminlte::page')

@section('title', 'ELITEfox-Inicio')

@section('content_header')
    <h1 class="h1 text-center">Gestion</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50);border:10px">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Marca</h1><br>
            <div class="card-body">
                <img src="https://i.pinimg.com/474x/f8/eb/5c/f8eb5ca8d3487448fd2845d12717f4b2.jpg" class="card-img-top" alt="">
                <a href="{{route('marca.index')}}" class="btn btn-primary mt-3">Marca</a>
            </div>
            </div>
            </div>

            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Categoria</h1><br>
            <div class="card-body">
                <img src="https://seampedia.com/wp-content/uploads/2022/02/Sin-titulo-1.jpg" class="card-img-top" style="height:219px">
                <a href="{{route('categoria.index')}}" class="btn btn-primary mt-3">Categoria</a><br>
            </div>
            </div>
            </div>

            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Cliente</h1><br>
            <div class="card-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpDSa6u-YP_lB6OnfacVzhi9-6g5J2JhLWeg&s" class="card-img-top" style="height:220px" alt="">
                <a href="{{route('cliente.index')}}" class="btn btn-primary mt-3">Cliente</a>
            </div>
            </div>
            </div>

            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Productos</h1><br>
            <div class="card-body">
                <img src="https://www.esdesignbarcelona.com/sites/default/files/imagenes/haz-crecer-tu-marca-de-ropa-frente-la-competencia_1.jpg" class="card-img-top" style="height:239px" alt="">
                <a href="{{route('producto.index')}}" class="btn btn-primary">Productos</a>
            </div>
            </div>
            </div>

            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Estado</h1><br>
                <div class="card-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaBuKt9kj0NLyT0UB3zK8lLfVwaZGbX540fQ&s" class="card-img-top" style="height:225px" alt="">
                <a href="{{route('estado.index')}}" class="btn btn-primary mt-3">Estado</a><br>
            </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Modo de pago</h1><br>
                <div class="card-body">
                <img src="https://m.smart.edu.co/wp-content/uploads/2024/04/Completo-Mobile-Formas-de-pago.png.webp" class="card-img-top" style="height:215px" alt="">
                <a href="{{route('modoPago.index')}}" class="btn btn-primary mb-3">Modo Pago</a>
            </div>
            </div>               
            </div>

            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Factura</h1><br>
                <div class="card-body">
                <img src="https://www.credlix.com/_next/image?url=https%3A%2F%2Fblog.credlix.com%2Fwp-content%2Fuploads%2F2025%2F01%2Fblog1.webp&w=3840&q=75" class="card-img-top" style="height:215px" alt="">
                <a href="{{route('factura.index')}}" class="btn btn-primary mb-3">Factura</a>
                </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center" style="width: 16rem; background-color:rgb(49, 50, 50)">
                <h1 class="card-title text-center" style="font-size: 40px; color:goldenrod">Detalle Factura</h1><br>
                <div class="card-body">
                <img src="https://www.grupovadillo.com/wp-content/uploads/2018/03/contenido-factura.jpg" class="card-img-top" style="height:215px" alt="">
                <a href="{{route('detalleFactura.imdex')}}" class="btn btn-primary mb-3">Detalle factura</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
    
</style>
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
            background-image: url("https://i.pinimg.com/736x/19/d9/b5/19d9b576468ba999e2c49582a5879599.jpg");
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