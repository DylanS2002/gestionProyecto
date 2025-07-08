<?php

namespace App\Http\Controllers;

use App\Models\modo_pago;
use Illuminate\Http\Request;

class ModoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modoPagos = modo_pago::all();
        return view("modoPago.index", compact("modoPagos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("modoPago.crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|min:3|max:225',
            'descripcion'=> 'required|max:1000',
            'activo'=> 'required',
        ]);
        modo_pago::create($request->all());
        return redirect()->route("modoPago.index")->with('success','Creado con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(modo_pago $modo_pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $modoPago = modo_pago::find($id);
        return view('modoPago.editar',compact('modoPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        modo_pago::find($id)->update($request->all());
        return redirect()->route('modoPago.index')->with('success','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        modo_pago::find($id)->delete();
        return redirect()->route('modoPago.index')->with('success','Eliminado con Exito');
    }
}
