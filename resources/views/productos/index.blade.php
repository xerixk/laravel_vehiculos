@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if(session()->get('success'))
                <div class="mt-3 mb-3" style="background-color: rgba(47,255,0,0.76);color:black;font-weight: bold;font-size:20px;text-align: center">
                    <p>{{session()->get('success')}}</p>
                </div>
            @endif
            <h1>Listar Productos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Comprar</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $producto)
                    <tr>
                        <th scope="row">{{$producto->id}}</th>
                        <th scope="row">{{$producto->titulo}}</th>
                        <th scope="row">{{$producto->descripcion}}</th>
                        <th scope="row">{{$producto->precio}}€</th>
                        <th scope="row">
                            <img style="width: 90px;height: 80px" src="{{$producto->imagen}}">
                        </th>
                        <th scope="row">
                            <a href="{{route('confirmar.compra',$producto->id)}}" class="btn btn-success">Comprar</a>
                        </th>

                       {{-- <th scope="row"><a href="{{route('mostrar.editar',$item->matricula)}}">Editar</a></th>
                        <th scope="row"><a href="{{route('eliminar.item',$item->matricula)}}">Eliminar</a></th>--}}
                        <th scope="row"><a href="{{route('mostrar.producto',$producto->id)}}">Mostrar</a></th>
                    </tr>
                @empty
                    <p>No hay productos en la lista</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection