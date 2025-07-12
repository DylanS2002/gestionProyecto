@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="texto-brillante text-center">Editar Factura</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <a href="{{route('factura.index')}}" class="btn btn-primary">Volver</a>
    
    <form action="{{route('factura.update',$factura->id)}}" class="form" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label for="idcliente" class="form-label">Cliente</label>
                    <select name="idcliente" id="idcliente" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}"
                                @if ($cliente->id == $factura->idcliente)
                                    selected
                                @endif
                                >
                                {{$cliente->nombre  }} 
                                {{$cliente->apellido }}
                            </option>
                        @endforeach
                    </select>                    
                </div>
                <div class="col-2"></div>
                <div class="col-2"></div>
                <div class="col-2">
                    <label for="fecha" class="form-label"> Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{$factura->fecha}}">
                </div>
                <div class="col-6">
                    <label for="idestado" class="form-label">Estado</label>
                    <select name="idestado" id="idestado" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($estados as $estado)
                            <option value="{{$estado->id}}"
                                @if ($estado->id == $factura->idestado)
                                    selected
                                @endif
                                >
                                {{$estado->descripcion}} 
                            </option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-6">
                    <label for="idpago" class="form-label">Pago</label>
                    <select name="idpago" id="idpago" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($pagos as $pago)
                            <option value="{{$pago->id}}"
                                @if ($pago->id == $factura->idpago)
                                    selected
                                @endif>
                                {{$pago->nombre}} 
                            </option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-6">
                    <label for="Subtotal" class="form-label">Subtotal</label>
                    <input type="number" name="Subtotal" id="Subtotal" class="form-control" value="{{$factura->Subtotal}}">
                </div>
                <div class="col-6">
                    <label for="impuestos" class="form-label">Impuesto</label>
                    <input type="number" name="impuestos" id="impuestos" class="form-control" value="{{$factura->impuestos}}">
                </div>
                <div class="col-4 text-right mt-3"><label for="total" class="form-label">Total</label></div>
                <div class="col-4 text-center mt-3">
                    <input type="number" name="total" id="total" class="form-control" value="{{$factura->total}}">
                    <button type="submit" class="btn btn-success mt-3">Guardar</button>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </form>

@stop

@section('css')
@stop

@section('js')

@stop