@extends('layouts.app')
@section('content')

@section('scripts')
<script src="../js/app.js"></script>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
<?php
use App\Models\Producto;

$productos = Producto::all();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>
  <body class= "d-flex flex-column min-vh-100">
  <h1 class="container seccion text-center">Carrito de compras</h1>
  <h2 class="container seccion text-center margen-bottom">Selecciona tus productos</h2>
  <div class="row mx-auto">


    <?php
    if (!$_GET) {
      header('Location:carrito.php?pag=1');
    } ?>


    <?php
    foreach ($productos as $producto) : ?>

      <div class="col-sm-3 mb-0">
        <div class="card">
          <div class="card-body">
            <img src=<?php echo $producto['imagen'] ?> alt=<?php echo $producto['descripcion'] ?> class="img-fluid" height="200" width="200" />
            <div class="card-text ">
            <p><b><?php echo $producto['nombre'] ?></b></p>
            <p> $<?php echo $producto['precio'] ?></p>
          </div>
          <div>
            <button id="boton" class="btn-primary button">Agregar</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  </div>
  <!--Section: Contact v.2-->
  </body>

</html>

<?php echo View::make('_footer'); ?>
  @endsection

  @section('scripts')
  <script src="sweetalert2.all.min.js"></script>
<script>
const btns = document.querySelectorAll('.boton');
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function (e) {
      Swal.fire(
          '¡Excelente!',
          'Agregaste un ítem a tu carrito.',
          'success'
        )
    });
  }
</script>
@endsection