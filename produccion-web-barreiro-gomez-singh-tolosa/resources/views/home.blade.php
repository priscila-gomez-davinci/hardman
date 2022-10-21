
@extends('layouts.app')
@section('content')
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php
  ?>
  <header>
    <div id="indicadorCarrousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#indicadorCarrousel" data-slide-to="0" class="active"></li>
        <li data-target="#indicadorCarrousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../images/TP1-Img3.jpg" alt="Placa de video con imagen de Halo de fondo" width="1920" height="500" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/Tp1-Img4.jpg" alt="Escritorio gamer con luces, monitor, PC de escritorio y noteook" width="1920" height="500" />
        </div>
      </div>
      <a class="carousel-control-prev" href="#indicadorCarrousel" role="button" data-slide="prev">
        <p>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </p>
      </a>
      <a class="carousel-control-next" href="#indicadorCarrousel" role="button" data-slide="next">
        <p>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </p>
      </a>
    </div>

    <div class="card d-none d-sm-none d-md-block">
      <img class="card-img-top" src="../images/MiddleBanner.jpg" alt="Publicidad procesador intel con imagen de personajes de Overwatch" />
    </div>



    <?php
    use App\Models\Noticia;

    $noticias = Noticia::all();

    ?>
    <div class="card-group">
        
      <?php foreach ($noticias as $noticia) : ?>

        <div class=<?php echo $noticia['visualizacion'] ?>>
          <img class="card-img-top" src=<?php echo $noticia['imagen'] ?> height="180" width="230" />
          <div class="card-body">
            <p class="card-title">
              <?php echo $noticia['titulo'] ?>
            </p>
            <p class="card-text">
              <?php echo $noticia['descripcion'] ?>
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>


    </body>
<?php echo View::make('_footer'); ?>
@endsection

