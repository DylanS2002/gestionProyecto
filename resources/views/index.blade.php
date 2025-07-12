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
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Marca</h4>
                <img src="{{asset('img/index/marca.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('marca.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Marca</a>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Categoria</h4>
                <img src="{{asset('img/index/categoria.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('categoria.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Categoria</a><br>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Clientes</h4>
                <img src="{{asset('img/index/cliente.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('cliente.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Cliente</a>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Producto</h4>
                <img src="{{asset('img/index/producto.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('producto.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Productos</a>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Estado</h4>
                <img src="{{asset('img/index/estado.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('estado.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Estado</a>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Modo Pago</h4>
                <img src="{{asset('img/index/modoPago.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('modoPago.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Modo Pago</a>
                </div>
            </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Factura</h4>
                <img src="{{asset('img/index/Factura.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('factura.index')}}" type="button" class="btn btn-primary " style="width: 155px;">Factura</a>
                </div>
            </div>
            </div>

            <div class="col-3" style="">
                <div class="card" style="width: 200px; height:300px; background-color:black">
                <h4 class="h4 text-center">Detalle Factura</h4>
                <img src="{{asset('img/index/detalleFactura.png')}}" style="height:200px; width:200px " alt="">
                <div class="card-body">
                <a href="{{route('detalleFactura.imdex')}}" type="button" class="btn btn-primary " style="width: 155px;">Detalle factura</a>
                </div>
            </div>
            </div>
@stop

@section('css')

@stop

@section('js')
@stop