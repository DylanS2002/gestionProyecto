<?php

namespace App\Http\Controllers;

use App\Http\Requests\marcaRequest;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marca.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(marcaRequest $request)
    {
        $validacion = $request->validated();
        Marca::create($request->all());
        return redirect()->route('marca.index')->with('success','Creado Corectamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marca = Marca::find($id);
        return view('marca.editar', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Marca::find($id)->update($request->all());
        return redirect()->route('marca.index')->with('success','Actualizado Con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Marca::find($id)->delete();
        return redirect()->route('marca.index')->with('success','Se Elimino con Exito');

    }
}
