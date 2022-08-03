function calcularIMC(){
    const pesoUser = document.getElementById('#peso');
    const alturaUser = document.getElementById('#altura');
    const peso = pesoUser.value;
    const altura = pesoUser.value;

    const multiplicacao = altura * altura;
    const divisao = peso / multiplicacao;

    const resultado = (divisao);
    
    console.log(resultado);
  
}