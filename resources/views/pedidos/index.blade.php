
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if(session()->get('success'))
                <div class="mt-3 mb-3" style="background-color: rgba(47,255,0,0.76);color:black;font-weight: bold;font-size:20px;text-align: center">
                    <p>{{session()->get('success')}}</p>
                </div>
            @endif
            <h1>Listar pedidos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Fecha de compra</th>
                        <th scope="col">Fecha de compra</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $pedido)
                    <tr>
                        <th scope="row">{{$pedido->id}}</th>
                        <th scope="row">{{$pedido->producto->titulo}}</th>
                        <th scope="row">{{$pedido->usuario->name}}</th>
                        <th scope="row">Realizado hace {{ \Carbon\Carbon::parse($pedido->created_at)->longAbsoluteDiffForHumans(\Carbon\Carbon::now())}}</th>
                        <th scope="row">{{ \Carbon\Carbon::parse($pedido->created_at)->format("d/m/Y H:i:s")  }}</th>

                       {{-- <th scope="row"><a href="{{route('mostrar.editar',$item->matricula)}}">Editar</a></th>
                        <th scope="row"><a href="{{route('eliminar.item',$item->matricula)}}">Eliminar</a></th>
                        <th scope="row"><a href="{{route('mostrar.producto',$producto->id)}}">Mostrar</a></th>--}}
                    </tr>
                @empty
                    <p>No hay pedidos en la lista</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection