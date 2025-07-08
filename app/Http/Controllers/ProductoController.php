<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=producto::all();
        return view("producto.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias= Categoria::all();
        $marcas = Marca::all();

        return view('producto.crear', compact('categorias','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|min:3|max:225',
            'descripcion'=> 'required|max:1000',
            'precio'=> 'required',
            'precio_compra'=> 'required',
            'stock'=> 'required',
            'fecha_creacion'=> 'required',
            'estado'=> 'required',
            'idcategoria'=> 'required',
            'idmarca'=> 'required',
        ]);
        producto::create($request->all());
        return redirect()->route('producto.index')->with('success','Creado con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = producto::find($id);
        $categorias = categoria::all();
        $marcas = marca::all();

        return view('producto.editar', compact('producto','categorias','marcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        producto::find($id)->update($request->all());
        return redirect()->route('producto.index')->with('success','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        producto::find($id)->delete();
        return redirect()->route('producto.index')->with('success','Eliminado con Exito');
    }
}
