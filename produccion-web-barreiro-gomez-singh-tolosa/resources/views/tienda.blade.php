@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" />

@endsection
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
                                            <form action="{{ route('carrito.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <input type="hidden" value="{{ $producto->marca }}" id="marca" name="marca">
                                                <input type="hidden" value="{{ $producto->producto }}" id="producto" name="producto">
                                                <input type="hidden" value="{{ $producto->precio }}" id="precio" name="precio">
                                                <input type="hidden" value="{{ $producto->imagen }}" id="imagen" name="imagen">
                                                <button id= "btn" class="btn-primary buttons-primary btn" type="submit"> Agregar al carrito </button>
                                                </div>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach                           
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4"> No existen productos cargados. </td>
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




@section('scripts')
<script src="../js/tienda/show.js"></script>
  <script src="sweetalert2.all.min.js"></script>
@endsection