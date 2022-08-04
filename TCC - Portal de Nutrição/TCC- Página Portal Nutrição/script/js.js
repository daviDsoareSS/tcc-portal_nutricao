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

        if (resultado < 18.50) {
            document.getElementById("classificacaoIMC").innerHTML = "</p>Sua classificação: <strong>Abaixo do peso</strong></p>";
        } else if (resultado > 18.50 && resultado < 24.99) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: <strong>Peso Normal</strong></p>";
        } else if (resultado > 25.00 && resultado < 29.99){
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: <strong>Sobrepeso</strong></p>";
        } else if (resultado >= 30.00) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: <strong>Obesidade</strong></p>";
        } else if (resultado >= 40.00) {
            document.getElementById("classificacaoIMC").innerHTML ="</p>Sua classificação: <strong>Obesidade grave</strong></p>";
        } 
    });

  
