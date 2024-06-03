@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12" style="text-align: center">
            <h1>Confirmacion de compra de {{$producto->titulo}}</h1>
            <h4>Precio total: {{$producto->precio}}€</h4>
        </div>

        <div class="col-4" style="margin: auto;text-align: center">
            <form method="post" action="{{route('producto.comprar')}}">
                @csrf
                <input type="hidden" name="producto_id" value="{{$producto->id}}">
                <button type="submit" class="btn btn-success">Comprar</button>
            </form>
        </div>


    </div>
</div>
@endsection