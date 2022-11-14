@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $noticia->titulo }}</div>
                <div class="card-body">
                    {{ $noticia->descripcion }}
                    <hr>
                    <a class="btn btn-primary"> Volver a noticias </a>
                    <a class="btn btn-success"> Editar noticia </a>
                    <form class="d-inline">
                        <button class="btn btn-danger" type="submit"> Eliminar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection