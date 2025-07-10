@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <a href="{{route('categoria.index')}}" class="btn btn-primary">Volver</a>

            <form action="{{route('categoria.store')}}" class="form" method="POST">
                @csrf
                <lable for="nombre" class="form-label">Nombre</lable>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror"  name="nombre" id="nombre">

                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror">
                
                @error('descripcion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </div>
    
@stop

@section('css')

@stop

@section('js')
    
@stop