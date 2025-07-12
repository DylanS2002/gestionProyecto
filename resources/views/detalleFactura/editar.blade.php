@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="texto-brillante text-center">Crear Detalle</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <a href="{{route('detalleFactura.imdex')}}" class="btn btn-primary">Volver</a>
    <form action="{{route('detalleFactura.update', $detalleFactura->id)}}" class="form" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <label for="idfactura" class="formlabel">Cliente</label>
                    <select name="idfactura" id="idfactura" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($facturas as $factura)
                            <option value="{{$factura->id}}"
                                @if ($factura->id == $detalleFactura->idproducto)
                                    selected
                                @endif
                                >
                                {{$factura->cliente->nombre  }} 
                                {{$factura->cliente->apellido }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <label for="idproducto" class="formlabel">Producto</label>
                    <select name="idproducto" id="idproducto" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($productos as $producto)
                            <option value="{{$producto->id}}"
                                @if ($producto->id == $detalleFactura->idproducto)
                                    selected
                                @endif
                                
                                >
                                {{$producto->nombre  }} 
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mt-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{$detalleFactura->cantidad}}">
                </div>
                <div class="col-4 mt-3">
                    <label for="preciounitario" class="form-label">Precio c/u</label>
                    <input type="number" class="form-control" name="preciounitario" id="preciounitario" value="{{$detalleFactura->preciounitario}}">
                </div>
                <div class="col-4 mt-3">
                    <label for="totalinea" class="form-label">total linea</label>
                    <input type="number" class="form-control" name="totalinea" id="totalinea" value="{{$detalleFactura->totalinea}}">
                </div>
                <div class="col text-center mt-3">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
@stop

@section('js')

@stop