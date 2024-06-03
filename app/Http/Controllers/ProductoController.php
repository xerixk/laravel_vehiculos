<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::All();
        return view("productos.index",["data"=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function confirmar($id)
    {
        $producto = Producto::find($id);
        return view('productos.confirmar',compact('producto'));
    }
    public function comprar(Request $request)
    {
        Pedido::create([
            'num_ref' => Str::random(5),
            'user_id' => Auth::id(),
            'producto_id'=>$request->producto_id
        ]);
        return redirect()->route('listar.pedidos')->with('success',"Compra realizada con éxito");
    }
}
