<?php

namespace App\Http\Controllers;

use App\Http\Requests\estadosRequest;
use App\Models\estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = estado::all();
        return view('estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estado.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(estadosRequest $request)
    {
        $validacion = $request->validated();
        estado::create($request->all());
        return redirect()->route('estado.index')->with('success','Ceado con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estado = estado::find($id);
        return view('estado.editar',compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        estado::find($id)->update($request->all());
        return redirect()->route('estado.index')->with('success','Actualizado con Exito');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        estado::find($id)->delete();
        return redirect()->route('estado.index')->with('success','Eliminado con Exito');
    }
}
