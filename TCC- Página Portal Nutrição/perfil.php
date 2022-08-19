<?php
  include('protect.php');

/*  FUNÇÃO PARA TRANFORMAR DATA NO PADRÃO BRASILEIRO
    datetime("d/m/Y", stretotime($dado["dataNasc"]))
*/
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de nutrição</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&family=Nunito+Sans&display=swap');
    </style>
</head>
<body>
  <!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>                    
       </div>
    </div>
</div>
<!-- fim do preloader --> 
<header>
    <div class="container-header">
      <a href="index.php"><img src="img/logo/NutriAçãoLogo.png" alt="" width="170px" height="100px"></a>
        <div class="user-login">
            <a href="perfil.php"><small><?php echo($_SESSION['nome']);?></small></a>
            <img src="img/header/user-logo.png" width="60px" alt="">
            <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 10v-5l8 7-8 7v-5h-8v-4h8zm-16-8v20h14v-2h-12v-16h12v-2h-14z"/></svg></a>
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    </div>
</header>
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">HOME</a>
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
  <hr>
<main class="container-perfil">
    <div class="card-opcoes">
        <div class="card-topo">
          Perfil
        </div>
        <ul class="opcoes" id="opcoes-card">
          <a href="perfil.php"><li class="" value="1">Informações pessoais</li></a>
       
          <a href="perfil-meu-plano.html"><li class="" value="2">Meu plano</li></a>
      
          <li class="" value="3">Exercícios</li>
          
          <li class="">Alimentação</li>
          
          <li class="">Consultas</li>
        </ul>
      </div>
      <div class="container-perfil-informacoes">
          <div class="grid-perfil">
            <h2>Dados do usuário</h2>
            <span id="linha-title"></span>
              <div class="dados-usuario">
      
                <strong><h5>Email:</strong> <small><?php echo($_SESSION['email']);?></small></h5>
                <hr>
                <strong><h5>Nome:</strong> <small><?php echo($_SESSION['nome']);?></small></h5>
                <hr>
                <?php
                 //FUNÇÃO CALCULAR IDADE DO USUARIO
                  $dataNascimento = $_SESSION['dataNasc'];
                  $data = new DateTime($dataNascimento);
                  $resultado = $data->diff(new DateTime( date('Y-m-d')));
                ?>
                <strong><h5>Idade:</strong> <small><?php echo $resultado->format( '%Y anos' );?></small></h5>
                <hr>
                <strong><h5>Peso inicial:</strong> <small><?php echo($_SESSION['pesoInicial']);?></small></h5>
                <hr>
                <strong><h5>Altura:</strong> <small><?php echo($_SESSION['altura']);?></h5>
                <hr>
                <strong><h5>Plano selecionado:</strong> <small>Ganho de peso Intermediário</small></h5>
                <hr>
                <button id="btn-editar">Editar</button>
                <button id="btn-alterar-senha">Alterar senha</button>
            </div>
          </div>
          <div class="grid-perfil ">
            <div class="card text-center card-alterar-foto" style="width: 18rem;">
              <div class="card-body "> 
                <img src="img/header/user-logo.png" alt="" width="100px">
                  <button id="btn-alterar-foto">Alterar foto de perfil</button>
                  <button id="btn-remover-foto">Remover foto de perfil</button>
              </div>
            </div    
          </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script/js.js" defer></script>
<script src="preloader.js"></script>
</body>
</html>
