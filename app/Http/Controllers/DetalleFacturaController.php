<?php

namespace App\Http\Controllers;

use App\Http\Requests\detalleFacturasRequest;
use App\Models\detalleFactura;
use App\Models\factura;
use App\Models\producto;
use Illuminate\Http\Request;

class DetalleFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalleFacturas = detalleFactura::all();
        $facturas = factura::all();
        $productos = producto::all();
        return view("detalleFactura.index", compact("detalleFacturas","facturas","productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facturas = factura::all();
        $productos = producto::all();
        return view("detalleFactura.crear", compact("facturas","productos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(detalleFacturasRequest $request)
    {
        $validaciones = $request->validated();
        detalleFactura::create($request->all());
        return redirect()->route('detalleFactura.imdex')->with('success','Creado con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(detalleFactura $detalleFactura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detalleFactura =detalleFactura::find($id);
        $facturas = factura::all();
        $productos = producto::all();

        return view('detalleFactura.editar', compact('detalleFactura','facturas','productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        detalleFactura::find($id)->update($request->all());
        return redirect()->route('detalleFactura.imdex')->with('success','Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        detalleFactura::find($id)->delete();
        return redirect()->route('detalleFactura.imdex')->with('success','Eliminado con Exito');
    }
}
