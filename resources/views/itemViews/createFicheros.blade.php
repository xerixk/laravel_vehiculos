@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
           <h1>Subir Fichero</h1>
    
            <form action="{{ route('guardar.fichero') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="archivo" />
                <button type="submit">Subir archivo</button>
            </form>
        </div>
    </div>
</div>
@endsection