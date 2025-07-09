<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientesRequest;
use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = cliente::all();
        return view("cliente.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cliente.crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(clientesRequest $request)
    {
        $validacion = $request->validated();
        cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success','Se creo Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = cliente::find($id);
        return view('cliente.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        cliente::find($id)->update($request->all());
        return redirect()->route('cliente.index')->with('success','Se Actualizo con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cliente::find($id)->delete();
        return redirect()->route('cliente.index')->with('success','Eliminado Correctamente');
    }
}
