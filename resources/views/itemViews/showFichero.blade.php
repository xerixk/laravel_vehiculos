@extends('layouts.app')
@section('content')
    @php

    session()->get('succes');

    @endphp
    <div class="container">
        <div class="row">
        @if(session()->get('success'))
        <div class="mt-3 mb-3" style="color:black;font-weight:bold;font-size:20px;text-align:center;background-color:rgba(0,255,0,0.76);">
            <p>{{session()->get('success')}}</p>
        </div>
        @else
        <div class="mt-3 mb-3" style="color:black;font-weight:bold;font-size:20px;text-align:center;background-color:rgba(255,0,0,0.76);">
            <p>{{session()->get('error')}}</p>
        </div>
        @endif
            <div class="col">
                <h1>Lista de Ficheros</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Usuario</th>
                            <th scope='col'>Eliminar</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($ficheros)>0)
                    @foreach ($ficheros as $fichero)
                        <tr>
                            <td><a href="storage/files/{{$fichero->nombre}}" download="{{$fichero->nombre}}">{{ $fichero->nombre }}</a></td>
                            <td>{{ $fichero->tipo_fichero }}</td>
                            <td>{{ $fichero->user_id }}</td>
                            <td><a href="{{route('eliminar.fichero',$item->id)}}" class="btn btn-danger" 
                            onclick="confirm('¿Deseas eliminar este fichero?')">Eliminar</a></td>
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