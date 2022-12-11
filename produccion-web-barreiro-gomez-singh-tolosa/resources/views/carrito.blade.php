@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Productos') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <div class="mb-3">
                        <a class="btn btn-primary buttons-primary" href="{{ route('productos.create') }}"> Agregar Producto </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">  Imagen </th>
                                    <th scope="col"> Producto </th>
                                    <th scope="col"> Precio </th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($productos->count() > 0)
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td><img src="{{ asset('storage/'. $producto->imagen) }}" height="200" width="200"></td>
                                            <td> <b> {{ $producto->producto }}</b> </td>
                                            <td> ${{ $producto->precio }} </td>
                                            <td>
                                                <a class="btn btn-primary buttons-primary" href="{{ route('productos.show', ['producto' => $producto]) }}"> Ingresar </a>
                                            </td>
                                        </tr>
                                    @endforeach                           
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4"> No existen productos en el carrito. </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>

                        {{$productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection
