<?php

namespace App\Http\Controllers;

use App\Http\Requests\facturasRequest;
use App\Models\cliente;
use App\Models\estado;
use App\Models\factura;
use App\Models\modo_pago;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = factura::all();
        return view('factura.index', compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes=cliente::all();
        $estados=estado::all();
        $pagos=modo_pago::all();
        return view('factura.crear', compact('clientes','estados','pagos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(facturasRequest $request)
    {
        $validacion = $request->validated();
        factura::create($request->all());
        return redirect()->route('factura.index')->with('success','Creado con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
        
        $factura = factura::find($id);
        $clientes = cliente::all();
        $estados = estado::all();
        $pagos = modo_pago::all();
        return view('factura.editar', compact( 'factura','clientes','estados','pagos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        factura::find($id)->update($request->all());
        return redirect()->route('factura.index')->with('success','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        factura::find($id)->delete();
        return redirect()->route('factura.index')->with('success','Eliminado con Exito');
    }
}
