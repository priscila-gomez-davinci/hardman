@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $producto->titulo }}</div>

                    <div class="card-body">

                        <form class="m-3" method="POST" action="{{ route('productos.update', $producto) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="titulo" class="form-label"> Titulo </label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el nombre del producto" value="{{ $producto->titulo }}">
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción de la producto">{{ $producto->descripcion }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="imagen" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                                @error('imagen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success"> Modificar </button>
                            <a class="btn btn-danger" href="{{ route('novedades') }}"> Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
