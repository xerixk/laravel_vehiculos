@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nuevo Vehículo</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('crear.item') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="matricula" class="col-md-4 col-form-label text-md-right">Matrícula</label>
                            <input id="matricula" type="text" name="matricula" required autofocus>
                        </div>
                        <div class="form-group row">
                            <label for="modelo" class="col-md-4 col-form-label text-md-right">Modelo</label>
                            <input id="Modelo" type="text" name="modelo" required >
                        </div>
                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>
                            <input id="peso" type="number" name="peso" required >
                        </div>
                        <div class="form-group row">
                            <label for="fecha_matriculacion" class="col-md-4 col-form-label text-md-right">Matriculacion</label>
                            <input id="fecha_matriculacion" type="date" name="fecha_matriculacion" required >
                        </div>
                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">color</label>
                            <input id="color" type="text" name="color" required >
                        </div>
                        <div class="form-group row">
                            <label for="itv_pasada" class="col-md-4 col-form-label text-md-right">ITV Pasada</label>
                            <div class="col-md-6">
                                <select id="itv_pasada" class="form-control" name="itv_pasada" required>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>

                            </div>
                        </div>
  
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection