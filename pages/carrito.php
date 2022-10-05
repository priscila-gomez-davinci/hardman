<?php
require_once('../queries/productos.php');
require_once('../functions/paginador.php');
require_once('../dbconnection/databaseconnection.php');

$conn = getConnection();

$pag = $_GET['pag'] ?? 1;

$cant_prod = countProductos($conn);

$cant_pages = cantPages($cant_prod, 12);

$paginador = paginado($cant_prod, $pag, 12);

$productos = getProductos($conn, $pag, 12);

unset($conn);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php
  include_once('_imports.php');
  ?>
  <header>
    <?php
    include_once('_navbar.php');
    ?>
  </header>
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
            <button id="add" class="btn-primary button">Agregar</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>

    <nav aria-label="Page navigation example" class="justify-content-center">
      <ul class="pagination">
        <li class="page-item
        <?php echo $_GET['pag'] <= 1 ? 'disabled' : '' ?>">
          <a class="page-link" href="<?php echo "carrito.php?pag=" . $_GET['pag'] - 1 ?>">
            Previous</a>
        </li>

        <?php for ($i = 0; $i < $cant_pages; $i++) : ?>
          <li class="page-item <?php echo $_GET['pag'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="carrito.php?pag=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
        <?php endfor ?>

        <li class="page-item
        <?php echo $_GET['pag'] >= $cant_pages ? 'disabled' : '' ?>">
          <a class="page-link" href="<?php echo "carrito.php?pag=" . $_GET['pag'] + 1 ?>">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  </div>
  <!--Section: Contact v.2-->
  <?php
  include_once('_footer.php');
  ?>
  </body>

</html>

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