<?php
  include('protect.php');
?>

<?php
  //HEADER
  include 'includes/header.php';
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<title>NutriAção -Cálculo IMC</title>

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
  <hr>
  <main class="container-calculadora">
    <img src="img/calculo-de-imc/tabela-classificacao-IMC.png" alt="">
        <div id="calculadora">
          
          <h1> Calculadora de IMC</h1>
            <form action="" class="form-calculadora">
                    <label>
                        <span class="span"><strong>Seu Peso:</strong></span>
                        <br/>
                        <input type="number" name="peso" id="peso" class="input-calculadora" placeholder="ex. 60">
                    </label>
                    <br/>
                    <label>
                        <span class="span"><strong>Altura:</strong></span>
                        <br/>
                        <input type="number" name="altura" id="altura"  class="input-calculadora" placeholder="ex. 1.70">
                    </label>
                    <br/>
                    <br/>
                    <input type="submit" id="btn-calcular" value="Calcular">
            </form>
            <div class="container-resultado-calculo">
      <h1 id="resultadoIMC"></h1>
      <span id="classificacaoIMC"></span>
    </div>
        </div>  
  </main>
</body>
</html>
