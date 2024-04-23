@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1>Listar items</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Nº item</th>
                </tr>
                </thead>
                <tbody>
                @if(count($data)>0)
                @foreach($data as $index => $item)
                    <tr>
                        <th scope="row">{{$index}}</th>
                        <th scope="row">{{$item}}</th>
                        <th scope="row">
                            <a href="{{route('mostrar.item',$index)}}">Ver</a>
                        </th>
                        <th scope="row">
                            <a href="{{route('mostrar.editar',$index)}}">Editar</a>
                        </th>
                        <th scope="row">
                            <a href="{{route('eliminar.item',$index)}}">Eliminar</a>
                        </th>
                    </tr>
                @endforeach
                @else
                    <p>No hay elementos en la lista</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection