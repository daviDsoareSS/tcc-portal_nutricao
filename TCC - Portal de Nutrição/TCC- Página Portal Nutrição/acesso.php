 <?php

    include_once('conexao.php');
    
    $nome = $_POST['nome'];
    $dataNasc = $_POST['dataNasc'];
    $pesoIni = $_POST['pesoIni'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //$senha = base64_encode($senha); 

    $sql = "INSERT INTO users VALUES (DEFAULT, '$nome','$dataNasc', '$pesoIni', '$altura', '$sexo','$email','$senha')";

    if ($conn->query($sql) === TRUE) {
        header("location:login.html");
    }else {
        echo "<br>"."Informações não inseridas!";
    }
    
    $conn->close();
?>


