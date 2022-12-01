@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ $producto->titulo }}</div>

                    <div class="card-body">

                        <form class="m-3" method="POST" action="{{ route('productos.update', $producto) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="marca" class="form-label"> Marca </label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca producto" value="{{ $producto->marca }}">
                            </div>
                            <div class="mb-4">
                                <label for="producto" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="producto" name="producto" placeholder="Ingrese el nombre del producto" value="{{ $producto->producto }}">
                            </div>
                            <div class="mb-4">
                                <label for="precio" class="form-label"> Precio </label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" value="{{ $producto->precio }}">
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Producto </label>
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
                            <a class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection
