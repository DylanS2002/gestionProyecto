@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-6">
            <a href="{{route('categoria.index')}}" class="btn btn-primary">Volver</a>

            <form action="{{route('categoria.update', $categoria->id)}}" class="form" method="POST">
                @csrf
                <lable for="nombre" class="form-label">Nombre</lable>
                <input type="text" class="form-control " name="nombre" id="nombre" value="{{$categoria->nombre}}">

                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control " value="{{$categoria->Descripcion}}">
                
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </div>
    
@stop

@section('css')

@stop

@section('js')
    
@stop