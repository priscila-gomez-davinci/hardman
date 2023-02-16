@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('/public/carrousel.css') }}">
@endsection
@section('content')
<section class="row center">
<div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/moni.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Monica Barreiro</span>
              <span class="profession">Nacida en CABA, Lic. en Psicología, Estudiante de sistemas.</span>
            </div>


            <div class="button">
            <a href="https://www.linkedin.com/in/monabarreiro/">
                    <button class="hireMe" >LinkedIn</button>
                </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/mica.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Micaela Singh</span>
              <span class="profession">
                    Nacida en Quilmes, Buenos Aires
                    Estudiante de sistemas y administración
                    Analista de Back Office
                </span>
            </div>


            <div class="button">
            <a href="https://www.linkedin.com/in/micaela-singh/">
                    <button class="hireMe" >LinkedIn</button>
                </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/pri.jpeg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Priscila Gómez</span>
              <span class="profession">Nacida en Buenos Aires, estudiante de Análisis de sistemas</span>
            </div>


            <div class="button">
            <a href="https://www.linkedin.com/in/priscila-ayelen-g-64890681/">
                    <button class="hireMe" >LinkedIn</button>
                </a>
              
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      </section>
       <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <style>
    /* === Google Font Import - Poppins === */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section{
  position: relative;  
  height: 450px;
  width: 1075px;
  display: flex;
  align-items: center;
}

.swiper{
  width: 950px;
}

.card{
  position: relative;
  background: #fff;
  border-radius: 20px;
  margin: 20px 0;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}
.card::before{
  content: "";
  position: absolute;
  height: 40%;
  width: 100%;
  background: #105469;
  border-radius: 20px 20px 0 0;
}

.card .card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
  position: relative;
  z-index: 100;
}

section .card .image{
  height: 140px;
  width: 140px;
  border-radius: 50%;
  padding: 3px;
  background: #105469;
}

section .card .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #fff;
}

.card .media-icons{
  position: absolute;
  top: 10px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.card .media-icons i{
  color: #fff;
  opacity: 0.6;
  margin-top: 10px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.card .media-icons i:hover{
  opacity: 1;
}

.card .name-profession{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 10px;
} 

.name-profession .name{
  font-size: 20px;
  font-weight: 600;
}

.name-profession .profession{
  font-size:15px;
  font-weight: 500;
}

.card .rating{
  display: flex;
  align-items: center;
  margin-top: 18px;
}

.card .rating i{
  font-size: 18px;
  margin: 0 2px;
  color: #105469;
}

.card .button{
  width: 100%;
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card .button button{
  background: #105469;
  outline: none;
  border: none;
  color: #fff;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.button button:hover{
  background: #105469;
}

.swiper-pagination{
  position: absolute;
}

.swiper-pagination-bullet{
  height: 7px;
  width: 26px;
  border-radius: 25px;
  background: #105469;
}

.swiper-button-next, .swiper-button-prev{
  opacity: 0.7;
  color:#105469;
  transition: all 0.3s ease;
}
.swiper-button-next:hover, .swiper-button-prev:hover{
  opacity: 1;
  color: #7d2ae8;
}
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    </style>
    <?php echo View::make('_footer'); ?>
@endsection