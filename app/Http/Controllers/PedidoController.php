<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Auth::user()->pedidos;
        return view('pedidos.index',['data'=>$pedidos]);
    }
}
