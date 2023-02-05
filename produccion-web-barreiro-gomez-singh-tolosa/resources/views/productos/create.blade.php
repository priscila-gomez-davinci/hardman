@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Nuevo producto') }}</div>

                    <div class="card-body">

                        <form class="m-3" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="titulo" class="form-label"> Titulo </label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca del producto" value="{{ old('marca') }}">
                                @error('marca')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Nombre </label>
                                <textarea class="form-control" name="producto" id="producto" cols="30" rows="10" placeholder="Ingrese el nombre del producto">{{ old('producto') }}</textarea>
                                @error('producto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="precio" class="form-label"> Precio </label>
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" value="{{ old('precio')}}">
                            
                                @error('precio')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror</div>

                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Producto </label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción de la producto">{{ old('descripcion') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="imagen" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                                @error('imagen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success"> Crear </button>
                            <a class="btn btn-danger" href="{{ route('productos.index') }}"> Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection
