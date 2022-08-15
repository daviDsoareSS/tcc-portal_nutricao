<?php
   
    require_once("conexao.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['senha'] = $senha;
    //$senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "SELECT email, senha FROM users;";
    $dadosUser = "SELECT email , nome , dataNasc , pesoIni, altura , sexo FROM users;";
    $result = $conn->query($sql);  // aqui
    
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){
            !isset($_SESSION);
            session_start();
            header("location:index.php");
        
        }  
        else
            echo "Usuário não encontrado!";
    }

    $conn->close();


?>