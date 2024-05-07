@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Lista de Ficheros</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Usuario</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($ficheros as $fichero)
                        <tr>
                        <td>{{ $fichero->nombre }}</td>
                            <td>{{ $fichero->tipo_fichero }}</td>
                            <td>{{ $fichero->user->name }}</td>
                        </tr>
                    @empty
                        <p>No hay elementos en la lista</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection