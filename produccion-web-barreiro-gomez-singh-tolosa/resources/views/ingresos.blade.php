@extends('layouts.app')
@section('content')
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
  <h1 class="container seccion text-center margen-bottom">
    Galería de nuevos ingresos
  </h1>
  <?php foreach ($productos as $producto) : ?>
    <div class="container seccion margen-bottom">
      <div class="row">
        <div class="col-md-6">
          <h2> <?php echo $producto['marca'] ?></h2>
          <h3><?php echo $producto['producto'] ?></h3>
          <p>
            <?php echo $producto['descripcion'] ?>
          </p>
        </div>
        <div class="col-md-6">
          <img src=<?php echo $producto['imagen'] ?> alt=<?php echo $producto['producto'] ?> class="img-fluid" height="600" width="900" />
        </div>
      </div>
    </div>
  <?php endforeach ?>
  <?php
  include_once('_footer.php');
  ?>
  </body>