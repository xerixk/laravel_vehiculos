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
        return view("productos.index",["data"=>$vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ModeloVehiculo::create([
            "modelo"=>$request->modelo,
            "peso"=>$request->peso,
            "color"=>$request->color,
            "itv_pasada"=>true
        ]);
        return redirect()->route('listar.items');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("productos.show",["id"=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("productos.edit",["id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        ModeloVehiculo::where('matricula',$request->idItem)->update([
            "modelo"=>$request->modelo,
            "peso"=>$request->peso,
            "color"=>$request->color,
        ]);

        return redirect()->route('listar.items');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $matricula)
    {
       ModeloVehiculo::where('matricula',$matricula)->delete();

       return redirect()->route('listar.items');
    }
}
