@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Formulario de contacto') }}</div>

                    <div class="card-body">

                        <form class="m-3" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="nombre" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="telefono" class="form-label"> Telefono </label>
                                <input type="phone" class="form-control" id="telefono" name="telefono" placeholder="Ingrese un telefono de contacto" value="{{ old('telefono')}}">
                                @error('telefono')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label"> Email </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese un email de contacto" value="{{ old('email')}}">
                            
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror</div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label"> Mensaje </label>
                                <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Ingrese la su mensaje">{{ old('mensaje') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"> Enviar </button>
                            <a class="btn btn-danger" href="{{ route('home') }}"> Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection