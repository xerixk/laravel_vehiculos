@extends("layouts.app")
@section('content')
        <div class="container">
            <div class="row mt-5">
                    <div class="col-md-2 box">
                        <a href="{{route('listar.productos')}}">Listar productos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('listar.pedidos')}}">Listar pedidos</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('listar.ficheros')}}">Listar ficheros</a>
                    </div>
                    <div class="col-md-2 box">
                        <a href="{{route('mostrar.subirFichero')}}">Subir fichero</a>
                    </div>
            </div>
        </div>
@endsection()