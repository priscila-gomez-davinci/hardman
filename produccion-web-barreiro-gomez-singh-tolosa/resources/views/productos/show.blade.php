@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ $producto->producto }}</div>
                <img src="{{ asset('storage/' . $producto->imagen) }}" height="400" width="400">
                <div class="card-body">
                    <a><b>Producto: </b> {{ $producto->producto }}</a>
                    <br>
                    <a><b> Precio: </b>${{ $producto->precio }}</a>
                    <br>
                    <a><b>Descripcion: </b> {{ $producto->descripcion }}</a>
                    <hr>
                    <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver a productos </a>
                    <a class="btn btn-success" href="{{ route('productos.edit', ['producto' => $producto]) }}"> Editar producto </a>
                    <form id="form-delete" class="d-inline" method="POST" action="{{ route('productos.destroy', $producto) }}">
                        @csrf
                        @method('DELETE')
                    <button id= "form-submit" class="btn btn-danger" type="submit"> Eliminar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo View::make('_footer'); ?>
@vite(['resources/js/productos/show.js'])




@endsection