@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Formulario de contacto') }}</div>

                    <div class="card-body">
                        <a>El formulario de contacto ha sido enviado de manera exitosa, pronto nos estaremos comunicando con usted</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>

@endsection