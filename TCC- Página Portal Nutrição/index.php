<?php
  include('protect.php');
?>

<?php
  //HEADER
  include 'includes/header.php';
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<title>NutriAção -Início</title>
<body>
    <!-- início do preloader -->
    <div id="preloader">
      <div class="inner">
         <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
         <img src="img\gifs\1474.gif" alt="" width="90px">
         <div class="bolas">
            <div></div>
            <div></div>
            <div></div>                    
         </div>
      </div>
  </div>
  <!-- fim do preloader --> 
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
            <a href="create-account.php"><button id="btn-criarConta">CRIAR CONTA</button></a>
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
            <a href="exercicios.php"><div class="container-cards">
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
<?php
  //FOOTER
  include 'includes/footer.php';
?> 
</body>
</html>
