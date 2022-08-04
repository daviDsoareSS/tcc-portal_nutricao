    const btnCalcular = document.querySelector("#btn-calcular")

    btnCalcular.addEventListener("click",function(e){
        e.preventDefault();
        const peso = document.querySelector("#peso");
        const pesoUser = peso.value;
        const altura = document.querySelector("#altura");
        const alturaUser = altura.value;
    
        const multiplicacao = alturaUser * alturaUser;
        const divisao = pesoUser / multiplicacao;
    
        const resultado = (divisao);
        
        document.getElementById("resultadoIMC").innerHTML = "Resultado: "+resultado.toFixed(2);   

        if (resultado < 17) {
            document.getElementById("classificacaoIMC").innerHTML = "</p>Sua classificação: Muito abaixo do peso</p>";
        } else if (resultado < 18.49 && resultado > 17) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Abaixo do peso</p>";
        } else if (resultado < 24.99 && resultado > 18.5){
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Peso normal</p>";
        } else if (resultado < 29.99 && resultado > 25) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Acima do peso</p>";
        } else if (resultado < 34.99 && resultado > 30) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Obesidade I</p>";
        } else if (resultado < 39.99 && resultado > 35) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Obesidade II (severa)</p>";
        } else if (resultado > 40){
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: Obesidade II (severa)</p>";
        } 
    });

  
