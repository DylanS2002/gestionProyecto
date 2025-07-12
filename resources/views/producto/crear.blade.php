@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Crear')

@section('content_header')
    <h1 class="texto-brillante text-center">Crear Producto</h1>
@stop

@section('content_top_nav_left')
    <li class="nav-item d-none d-sm-block" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <span class="fw-bold texto-brillante text-center" style="font-size: 20px; color: #c19d44;"><b>Elite</b>fox</span>
    </li>
@endsection

@section('content')
    <a href="{{route('producto.index')}}" class="btn btn-primary mb-3">Volver</a>
    <div class="container">
        <div class="row">
            <form action="{{route('producto.store')}}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="stock" class="form-label">Stock</label>
                            <input class="form-control @error('stock') is-invalid @enderror"  type="number" name="stock" id="stock">
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control @error('nombre') is-invalid @enderror"  type="text" name="nombre" id="nombre">
                                @error('nombre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror">
                                <option value="">Seleccione</option>
                                <option value="1">Disponible</option>
                                <option value="0">Agotado</option>
                            </select>

                                @error('estado')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            <label for="fecha_creacion" class="form-label">Fecha Creacion</label>
                            <input class="form-control @error('fecha_creacion') is-invalid @enderror"  type="date" name="fecha_creacion" id="fecha_creacion">
                                @error('fecha_creacion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-12">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input class="form-control @error('descripcion') is-invalid @enderror"  type="text" name="descripcion" id="descripcion">
                                @error('descripcion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-6">
                            <label for="idmarca" class="form-label" class="form-label">Marca</label>
                            <select name="idmarca" id="idmarca" class="form-control @error('idmarca') is-invalid @enderror">
                                <option value="">Seleccione</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                @endforeach
                            </select>
                                @error('idmarca')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" id="precio">
                            @error('precio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="idcategoria" class="form-label">Categoria</label>
                            <select name="idcategoria" id="idcategoria" class="form-control @error('idcategoria') is-invalid @enderror">
                                <option value="">Seleccione</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                                @error('idcategoria')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            <label for="precio_compra" class="form-label">Precio Compra</label>
                            <input type="number" class="form-control @error('precio_compra') is-invalid @enderror" name="precio_compra" id="precio_compra"> 
                                @error('precio_compra')
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