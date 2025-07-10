@extends('layouts.app2')
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

@stop

@section('js')
@stop