<?php
  include('protect.php');

/*  FUNÇÃO PARA TRANFORMAR DATA NO PADRÃO BRASILEIRO
    datetime("d/m/Y", stretotime($dado["dataNasc"]))
*/
?>
<title>Meu perfil -Nutriação</title>

<?php
  //HEADER
  include 'includes/header.php';
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<body>
    <!-- início do preloader -->
    <div id="preloader">
      <div class="inner">
         <div class="bolas">
            <div></div>
            <div></div>
            <div></div>                    
         </div>
      </div>
  </div>
  <!-- fim do preloader --> 
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
</body>
</html>
