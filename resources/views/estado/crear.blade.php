@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1 class="texto-brillante text-center">Crear Estado</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="{{route('estado.index')}}" class="btn btn-primary mb-3">Volver</a>
                <form action="{{route('estado.store')}}" class="form" method="POST">
                    @csrf
                    <label for="descripcion" class="form-label">Estado</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror">
                        @error('descripcion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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