@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header navbar navbar-expand-md navbar-dark bg-dark mb-4 blanco text-center">{{ __('Carrito') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col"> Producto </th>
                                    <th scope="col"> Precio </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($carrito->count() > 0)
                                    @foreach ($carrito as $producto)
                                        <tr>
                                            <td><img src="{{ asset('storage/'. $producto->imagen) }}" height="200" width="200"></td>
                                            <td> <b> {{ $producto->producto }}</b> </td>
                                            <td> ${{ $producto->precio }} </td>
                                            <td>
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
                    </div>
                </div>
            </div>
        </div>
        <button class="btn-primary button"> Comprar carrito</button>
    </div>
    <?php echo View::make('_footer'); ?>
@endsection
