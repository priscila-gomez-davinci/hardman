@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $noticia->nombre }}</div>
                <div class="card-body">
                    {{ $noticia->descripcion }}
                    <hr>
                    <a class="btn btn-primary"> Volver a productos </a>
                    <a class="btn btn-success"> Editar producto </a>
                    <form class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"> Eliminar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection