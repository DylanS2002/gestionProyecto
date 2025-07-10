@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1 class="h1 text-center">Crear Cliente</h1>
@stop
@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection
@section('content')
    <a href="{{route('cliente.index')}}" class="btn btn-primary mb-3">Volver</a>
    <div class="container">
        <div class="row">
            <form action="{{route('cliente.store')}}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-4">                            
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control @error('nombre') is-invalid @enderror"  type="text" name="nombre" id="nombre">
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input class="form-control @error('apellido') is-invalid @enderror"  type="text" name="apellido" id="apellido">
                            @error('apellido')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-2">
                            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                            <input class="form-control @error('fecha_nacimiento') is-invalid @enderror"  type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                            @error('fecha_nacimiento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">                            
                            <label for="telefono" class="form-label">Telefono</label>
                            <input class="form-control @error('telefono') is-invalid @enderror"  type="text" name="telefono" id="telefono">
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="genero" class="form-label">genero</label>
                            <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
                                <option value="">seleccione</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                                <option value="Otros">Otros</option>
                            </select>
                            @error('genero')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-2">
                            <label for="fecha_registro" class="form-label">Fecha Registro</label>
                            <input class="form-control @error('fecha_registro') is-invalid @enderror"  type="date" name="fecha_registro" id="fecha_registro">
                            @error('fecha_registro')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input class="form-control @error('direccion') is-invalid @enderror"  type="text" name="direccion" id="direccion">
                            @error('direccion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Correo</label>
                            <input class="form-control @error('email') is-invalid @enderror"  type="text" name="email" id="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                            <button type="submit" class="btn btn-success mt-3">Guardar</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')

@stop