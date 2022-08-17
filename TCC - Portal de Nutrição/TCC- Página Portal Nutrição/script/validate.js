/*function validate(item){
    item.setCustomValidity('');
    item.checkValidity();

    if  (item == senha2){
        if(item.value == senha.value)item.setCustomValidity('');
            else item.setCustomValidity('As senhas digitadas não são iguais!');
    }
}*/


const form = document.getElementById("form");
const nomeUser = document.getElementById("nomeUser");
const dataNasc = document.getElementById("dataNasc");
const pesoIni = document.getElementById("pesoIni");
const altura = document.getElementById("altura");
const homem = document.getElementById("homem");
const mulher = document.getElementById("mulher");
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const senha2 = document.getElementById("senha2");

form.addEventListener("click", (e) => {
  checkInputs();
});

function checkInputs() {
    const nomeValue = nomeUser.value;
    /*const dataValue = dataNasc.value;
    const pesoValue = pesoIni.value;
    const alturaValue = altura.value;
    const homemValue = homem.value;
    const mulherValue = mulher.value;*/
    const emailValue = email.value;
    const senhaValue = senha.value;
    const senha2Value = senha2.value;

  if (nomeValue === "") {
    setErrorFor(nomeUser, "O nome de usuário é obrigatório.");
  } else {
    setSuccessFor(nomeUser);
  }

  if (emailValue === "") {
    setErrorFor(email, "O email é obrigatório.");
  } else if (!checkEmail(emailValue)) {
    setErrorFor(email, "Por favor, insira um email válido.");
  } else {
    setSuccessFor(email);
  }

  if (senhaValue === "") {
    setErrorFor(senha, "A senha é obrigatória.");
  } else if (senhaValue.length < 7) {
    setErrorFor(senha, "A senha precisa ter no mínimo 7 caracteres.");
  } else {
    setSuccessFor(senha);
  }

  if (senha2Value === "") {
    setErrorFor(senha2, "A confirmação de senha é obrigatória.");
  } else if (senha2 !== senhaValue) {
    setErrorFor(senha2, "As senhas não conferem.");
  } else {
    setSuccessFor(senha2);
  }

  const topLogin = form.querySelectorAll(".top-login");

  const formIsValid = [...topLogin].every((topLogin) => {
    return topLogin.className === "topLogin success";
  });

  if (formIsValid) {
    console.log("O formulário está 100% válido!");
  }
}

function setErrorFor(input, message) {
  const topLogin = input.parentElement;
  const p = topLogin.querySelector("p");

  // Adiciona a mensagem de erro
  p.innerText = message;

  // Adiciona a classe de erro
  topLogin.className = "top-login error";
}

function setSuccessFor(input) {
  const topLogin = input.parentElement;

  // Adicionar a classe de sucesso
  topLogin.className = "top-login success";
}

function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}