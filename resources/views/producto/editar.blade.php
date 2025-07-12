@extends('layouts.app2')
@extends('adminlte::page')

@section('title', 'ELITEfox-Editar')

@section('content_header')
    <h1 class="texto-brillante text-center">Editar Producto</h1>
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
            <form action="{{route('producto.update', $producto->id)}}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="stock" class="form-label">Stock</label>
                            <input class="form-control"  type="number" name="stock" id="stock" value="{{$producto->stock}}">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control"  type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
                        </div>
                        <div class="col-6">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="1"
                                @if ($producto->estado == 1)
                                    selected
                                @endif
                                >Disponible</option>
                                <option value="0"
                                @if ($producto->estado == 0)
                                    selected
                                @endif
                                >Agotado</option>
                            </select>
                            <label for="fecha_creacion" class="form-label">Fecha Creacion</label>
                            <input class="form-control"  type="date" name="fecha_creacion" id="fecha_creacion" value="{{$producto->fecha_creacion}}">
                        </div>
                        <div class="col-12">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input class="form-control"  type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
                        </div>
                        <div class="col-6">
                            <label for="idmarca" class="form-label" class="form-label">Marca</label>
                            <select name="idmarca" id="idmarca" class="form-control">
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}"
                                        @if ($marca->id == $producto->idmarca)
                                            selected
                                        @endif
                                        >{{$marca->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio" value="{{$producto->precio}}">
                        </div>
                        <div class="col-6">
                            <label for="idcategoria" class="form-label">Categoria</label>
                            <select name="idcategoria" id="idcategoria" class="form-control">
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}"
                                        @if ($categoria->id == $producto->idcategoria)
                                            selected
                                        @endif
                                        >{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="precio_compra" class="form-label">Precio Compra</label>
                            <input type="number" class="form-control" name="precio_compra" id="precio_compra" value="{{$producto->precio_compra}}">                
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