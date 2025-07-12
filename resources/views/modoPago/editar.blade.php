@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="texto-brillante text-center">Crear Modo de pago</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{route('modoPago.index')}}" class="btn btn-primary">Volver</a>
                <form action="{{route('modoPago.update', $modoPago->id)}}" class="form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$modoPago->nombre}}">
                    </div>
                    <div class="col-6">
                        <label for="activo" class="form-label">Activo</label>
                        <select name="activo" id="activo" class="form-control">
                            <option value="">Seleccione</option>
                            <option value="1"
                                @if ($modoPago->activo == 1)
                                    selected
                                @endif
                            >Activo</option>
                            <option value="0"
                                @if ($modoPago->activo == 0)
                                    selected
                                @endif
                            >Inactivo</option>
                        </select>
                    </div>
                    </div>
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$modoPago->descripcion}}">
                    <button type="submit" class="btn btn-success mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')

@stop