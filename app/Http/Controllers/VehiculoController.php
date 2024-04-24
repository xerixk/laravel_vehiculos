<?php

namespace App\Http\Controllers;

use App\Models\ModeloVehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=ModeloVehiculo::all();
        return view('itemViews.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('itemViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ModeloVehiculo::create($request->all());
        return redirect()->route('listar.items');
    }

    /**
     * Display the specified resource.
     */
    public function show($matricula)
    {
        $vehiculo=ModeloVehiculo::where('matricula', $matricula)->first();
        return view('itemViews.show',compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehiculo = ModeloVehiculo::findOrFail($id);
    return view('itemViews.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehiculo = ModeloVehiculo::findOrFail($id);
        $vehiculo->update($request->all());
        return redirect()->route('listar.items');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiculo = ModeloVehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('listar.items');
    }
}
