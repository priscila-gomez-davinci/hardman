<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php
  include_once('_imports.php');
  ?>
  <header>
    <?php require_once('_navbar.php') ?>
  </header>
</head>
<body class="d-flex flex-column min-vh-100"  style="background-color:grey;">
  <h1 class="d-none">H1</h1>
  <h2 class="d-none">H2</h2>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 pb-5">
        <form action="recepcion_formulario.php" method="post">
          <div class="card border-primary rounded-3">
            <div class="card-header p-0">
              <div class="bg-info text-white text-center">

                <img src="../images/chica_hablando_tel.jpg" alt="recepcionista" class="img-fluid">
                <h3 class="text-white">Contactanos</h3>
                <p class="m-0">Con gusto te ayudaremos</p>
              </div>
            </div>
            <p>El formulario ha sido validado correctamente. Pronto estaremos comunicandonos con vos. </p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="short-content">
  <?php
  include_once('_footer.php');
  ?>

</html>