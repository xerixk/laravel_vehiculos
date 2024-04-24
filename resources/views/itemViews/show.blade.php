@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1>Id = {{$vehiculo->id}}</h1>
            <p> <span><strong>Matricula= </strong>{{$vehiculo->matricula}}</p></span>
            <p> <span><strong>Modelo= </strong>{{$vehiculo->modelo}}</p></span>
            <p> <span><strong>color= </strong>{{$vehiculo->color}}</p></span>
            <p> <span><strong>Peso= </strong>{{$vehiculo->peso}}</p></span>
        </div>
        <a href="{{route('listar.items')}}">Volver</a>

    </div>
</div>
@endsection