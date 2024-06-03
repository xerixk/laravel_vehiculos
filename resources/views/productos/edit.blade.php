@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="mt-5">
                <div class="col-12">
                    <p>Editar vehiculo matricula= {{$id}}</p>

                    <form method="POST" action="{{route('actualizar.item')}}">
                        @csrf
                        <input type="hidden" name="idItem" value="{{$id}}">
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