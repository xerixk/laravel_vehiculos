@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
           <h1>Subir Fichero</h1>
            <form method="POST" action="{{route('crear.fichero')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="fichero" accept=".jpg,.png,.pdf,.gif,.doc">
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection