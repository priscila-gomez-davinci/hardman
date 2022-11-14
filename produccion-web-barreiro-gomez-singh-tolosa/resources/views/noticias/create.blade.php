@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">

                        <form class="m-3" method="POST" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="nombre" class="form-label"> Título </label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el título de la noticia">
                            </div>
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="descripcion"  cols="30" rows="10" placeholder="Ingrese la descripción de la noticia"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="imagen" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" name="imagen">
                            </div>
                            <button type="submit" class="btn btn-success"> Crear </button>
                            <a class="btn btn-danger" > Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
