@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="texto-brillante text-center">Editar Marca</h1>
@stop
 @section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
 @stop

@section('content')
    <div class="row">
        <div class="col-6">
            <a href="{{route('marca.index')}}" class="btn btn-primary">Volver</a>

            <form action="{{route('marca.update', $marca->id)}}" class="form" method="POST">
                @csrf
                <lable for="nombre" class="form-label">Nombre</lable>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$marca->nombre}}">

                <label for="description" class="form-label">Descripcion</label>
                <input type="text" name="description" id="descripcion" class="form-control" value="{{$marca->description}}">
                

                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </div>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop