@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $noticia->titulo }}</div>
                <img src="{{ asset('storage/' . $noticia->imagen) }}" height="400" width="400">
                <div class="card-body">
                    {{ $noticia->descripcion }}
                    <hr>
                    <a class="btn btn-primary" href="{{ route('noticias.index') }}"> Volver a noticias </a>
                    <a class="btn btn-success" href="{{ route('noticias.edit', ['noticia' => $noticia]) }}"> Editar noticia </a>
                    <form id="form-delete" class="d-inline" method="POST" action="{{ route('noticias.destroy', $noticia) }}">
                        @csrf
                        @method('DELETE')
                    <button id= "form-submit" class="btn btn-danger" type="submit"> Eliminar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@vite(['resources/js/noticias/show.js'])




@endsection