<?php
session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriAção -Início</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');
    </style>
</head>
<body>

  <!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="1474.gif" alt="" width="90px">
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>                    
       </div>
    </div>
</div>
<!-- fim do preloader --> 


</body>
<header>
    <div class="container-header">
      <a href="index.html"><img src="img/logo/NutriAçãoLogo.png" alt="" width="170px" height="100px"></a>
        <div class="user-login">
            <a href="perfil.php"><small>Acesse seu perfil</small></a>
            <img src="img/header/user-logo.png" width="60px" alt="">
            <a href="login.html"><p><?php header('?sair')?>SAIR</p></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    </div>
</header>
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.html">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">SOBRE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="noticias.html">NOTÍCIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DIETAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PLANOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calculo.html">CÁLCULO IMC</a>
          </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>
      </form>
    </div>
  </nav>
<main>
  <div class="conteudo">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="conteudo-carousel1">
            <p>BEM VINDO AO PORTAL DE NUTRIÇÃO</p>
            <h3>Lorem Ipsum is simply</h3>
            <h1><strong>Text of the printing typesetting</strong></h1>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis qui excepturi culpa consectetur dolorem nisi minima veniam minus, laudantium ullam exercitationem cum officia vero, quo at id cupiditate eligendi nulla?</small>
            <br>
            <a href="#"><button id="btn-saibaMais">SAIBA MAIS</button></a>
            <a href="login.html"><button id="btn-criarConta">CRIAR CONTA</button></a>
            </div>
            <img src="img/carosel/background-carousel.jpg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <div class="conteudo-carousel2">
                <p>BEM VINDO AO PORTAL DE NUTRIÇÃO</p>
                <h3>Lorem Ipsum is simply</h3>
                <h1><strong>Text of the printing typesetting</strong></h1>
                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis qui excepturi culpa consectetur dolorem nisi minima veniam minus, laudantium ullam exercitationem cum officia vero, quo at id cupiditate eligendi nulla?</small>
                <br>
                <a href="#"><button id="btn-saibaMais">SAIBA MAIS</button></a>
                <button id="btn-criarConta">CRIAR CONTA</button>
            </div>
            <img src="img/carosel/background-carousel.jpg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <div class="conteudo-carousel3">
                <p>BEM VINDO AO PORTAL DE NUTRIÇÃO</p>
                <h3>Lorem Ipsum is simply</h3>
                <h1><strong>Text of the printing typesetting</strong></h1>
                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis qui excepturi culpa consectetur dolorem nisi minima veniam minus, laudantium ullam exercitationem cum officia vero, quo at id cupiditate eligendi nulla?</small>
                <br>
                <a href="#"><button id="btn-saibaMais">SAIBA MAIS</button></a>
                <button id="btn-criarConta">CRIAR CONTA</button>
                </div>
            <img src="img/carosel/background-carousel.jpg" class="d-block w-100" alt="..." height="900vw">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</main>
<section id="section-escolhas">
    <img src="img/background/img2-section2.jpg" id="background-section" alt="">
    <div class="container-section">
        <div class="cards-top">
            <a href="#"><div class="container-cards">
                <img src="img/cards/emagrecimento.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">PLANO DE <strong>EMAGRECIMENTO</strong></p>
                <p id="text-cards">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, assumenda! Unde cum corporis veniam perspiciatis cumque doloribus eaque repellat rem minima distinctio quasi officia fugit error aliquid commodi, illum veritatis.</p>
            </div></a>  
        </div>
        <div class="cards-up">
            <a href="exercicios.html"><div class="container-cards">
                <img src="img/cards/imagem2-alongamento.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">PROGRAMA DE<strong> EXERCÍCIOS</strong></p>
                <p id="text-cards">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam ad pariatur enim omnis consectetur, repellendus laudantium dolor dicta perferendis, illo unde quo, officiis nesciunt aperiam placeat cum quae. Unde, exercitationem!</p>
            </div></a> 
        </div>
        <div class="cards-top">
            <a href="#"><div class="container-cards">
                <img src="img/cards/alimentos-saudáveis.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">PLANO DE <strong>ALIMENTAÇÃO</strong></p>
                <p id="text-cards">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed doloremque deserunt quam provident adipisci a dolores, ex tempora culpa eum ea ullam porro officia alias, impedit debitis veniam neque magni?</p>
            </div></a> 
        </div>
        <div class="cards">
          <a href="#"><div class="container-cards">
                <img src="img/cards/ganho-de-peso.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">GANHO DE <strong>PESO</strong></p>
                <p id="text-cards">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed doloremque deserunt quam provident adipisci a dolores, ex tempora culpa eum ea ullam porro officia alias, impedit debitis veniam neque magni?</p>
            </div></a> 
        </div>
        <div class="cards-down">
            <a href="calculo.html"><div class="container-cards">
                <img src="img/cards/calculo-de-IMC.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">CÁLCULADORA DE <strong>IMC</strong></p>
                <p id="text-cards">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed doloremque deserunt quam provident adipisci a dolores, ex tempora culpa eum ea ullam porro officia alias, impedit debitis veniam neque magni?</p>
            </div></a> 
        </div>
        <div class="cards">
            <a href="#"><div class="container-cards">
                <img src="img/cards/noticias-nutrição.jpg" alt="" width="800vh" style="max-height:270px">
                <p id="title-cards">NOTÍCIAS SOBRE<strong> BEM ESTAR</strong></p>
                <p id="text-cards">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed doloremque deserunt quam provident adipisci a dolores, ex tempora culpa eum ea ullam porro officia alias, impedit debitis veniam neque magni?</p>
            </div></a> 
        </div>
    </div>
    </div>
</section>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="index.html"><img src="img/logo/NutriAçãoLogo.png" alt="" width="170px" height="100px"></a>
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-grayish"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-grayish"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-grayish"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-grayish"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: #F66B6B; color: white">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">PortalNutrição</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script/js.js"></script>
<script src="preloader.js"></script>
 
</body>
</html>
