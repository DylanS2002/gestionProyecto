@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1>Crear Detalle</h1>
@stop
@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

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
    
@stop

@section('js')

@stop