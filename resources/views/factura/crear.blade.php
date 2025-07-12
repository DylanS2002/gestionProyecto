@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1 class="texto-brillante text-center">Crear Factura</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

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
@stop

@section('js')

@stop