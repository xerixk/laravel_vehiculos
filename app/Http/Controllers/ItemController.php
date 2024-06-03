<?php

namespace App\Http\Controllers;

use App\Models\ModeloVehiculo;
use Illuminate\Http\Request;
use \App\Models\Vehiculo;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=ModeloVehiculo::select('matricula','modelo','fecha_matriculacion','peso','color','itv_pasada')->get();
        return view("productos.index",["data"=>$vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showFormCreate()
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
    public function showFormEdit(string $id)
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
    public function destroy(string $id)
    {
        ModeloVehiculo::where('matricula',$id)->delete();

        return redirect()->route('listar.items');
    }
}