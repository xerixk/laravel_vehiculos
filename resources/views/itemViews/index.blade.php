@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5"> 
        <div class="col-12"> <h1>Listar items</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Fecha Matriculación</th>
                        <th scope="col">Peso</th>
                        <th scope="col">color</th>
                        <th scope="col">ITV Pasada</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($vehiculos)>0)
                    @foreach($vehiculos as $index => $item)
                    <tr>
                        <th scope="row">{{$index}}</th>
                        <th scope="row">{{$item->matricula}}</th>
                        <th scope="row">{{$item->modelo}}</th>
                        <th scope="row">{{$item->fecha_matriculacion}}</th>
                        <th scope="row">{{$item->peso}}</th>
                        <th scope="row">{{$item->color}}</th>
                        <th scope="row">{{$item->itv_pasada}}</th>
                        <th scope="row">
                            <a href="{{route('mostrar.item',$item->matricula)}}">Ver</a>
                            </th>
                        <th scope="row">
                            <a href="{{route('mostrar.editar',$item->id)}}">Editar</a>
                            </th>
                        <th scope="row">
                        <form method="POST" action="{{ route('eliminar.item', ['id' => $item->id]) }}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
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
<a href="{{route('home')}}">volver</a>
@endsection