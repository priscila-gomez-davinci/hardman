@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Noticias') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <div class="mb-3">
                        <a class="btn btn-primary buttons-primary" href="{{ route('noticias.create') }}"> Agregar Noticia </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">  Imagen </th>
                                    <th scope="col"> Título </th>
                                    <th scope="col"> Descripcion </th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($noticias->count() > 0)
                                    @foreach ($noticias as $noticia)
                                        <tr>
                                            <td><img src="{{ asset('storage/'. $noticia->imagen) }}" height="200" width="200"></td>
                                            <td> <b> {{ $noticia->titulo }}</b> </td>
                                            <td> {{ $noticia->descripcion }} </td>
                                            <td>
                                                <a class="btn buttons-primary" href="{{ route('noticias.show', ['noticia' => $noticia]) }}"> Ingresar </a>
                                            </td>
                                        </tr>
                                    @endforeach                           
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4"> No existen noticias cargadas. </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>

                        {{$noticias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection
