@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar item id = {{$vehiculo->id}}</h1>
        </div>

        <form method="POST" action="{{ route('actualizar.item', ['id' => $vehiculo->id]) }}">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{$vehiculo->id}}">
            <div class="form-group">
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{ $vehiculo->modelo }}">
            </div>

            <div class="form-group">
        <label for="fecha_matriculacion">Fecha de Matriculación:</label>
        <input type="date" name="fecha_matriculacion" class="form-control" value="{{ $vehiculo->fecha_matriculacion }}">
    </div>
    
    <div class="form-group">
        <label for="peso">Peso:</label>
        <input type="text" name="peso" class="form-control" value="{{ $vehiculo->peso }}">
    </div>
    
    <div class="form-group">
        <label for="color">Color:</label>
        <input type="text" name="color" class="form-control" value="{{ $vehiculo->color }}">
    </div>
    
    <div class="form-group">
        <label for="itv_pasada">ITV Pasada:</label>
        <select name="itv_pasada" class="form-control">
            <option value="1" {{ $vehiculo->itv_pasada ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ !$vehiculo->itv_pasada ? 'selected' : '' }}>No</option>
        </select>
    </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection