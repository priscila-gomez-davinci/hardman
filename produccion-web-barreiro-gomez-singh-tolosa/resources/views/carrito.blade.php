@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
@section('content')
<?php global $total; ?>
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
                                            <td> <?php ($total += $producto->precio); ?>
                                            <td>
                                            <form id="form-delete" method="POST" class="d-inline" action="{{ route('carrito.destroy', $producto->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                    <button id= "btn" class="btn btn-danger" type="submit"> Eliminar </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach      
                                    <div>
                                            <div>
                                            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"> <a>Total $ <?php echo $total ?></a></th>
                                                    <th scope="col"><button class="btn-primary buttons-primary"> Comprar carrito</button></th>
                                                    <th scope="col">
                                                    <form id="form-delete" method="POST" class="d-inline" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button id= "form-submit" class="btn btn-danger" type="submit">Vaciar carrito</button>
                                                    </form>
                                                </tr>
                                            </thead>
                                            </table>
                                            </div>
                        </div>                     
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
    </div>
    @vite(['resources/js/carrito/show.js'])
    <?php echo View::make('_footer'); ?>
@endsection
