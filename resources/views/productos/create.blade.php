@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
           <h1>Crear vehiculo</h1>
            <form method="POST" action="{{route('crear.item')}}">
                @csrf
                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" name="modelo">
                </div>
                <div class="form-group">
                    <label>Peso</label>
                    <input type="text" name="peso">
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="color">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection