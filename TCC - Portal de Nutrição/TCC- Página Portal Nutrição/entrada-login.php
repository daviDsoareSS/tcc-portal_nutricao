<?php
    session_start();
    require_once("conexao.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['senha'] = $senha;
    //$senha=base64_encode($senha);

    if ($conn->connect_error) {
    
        die("Falha na conexão " . $conn->connect_error);
    
    }

    $sql = "SELECT email, senha FROM users;";
    
    $result = $conn->query($sql);  // aqui
    
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){

            header("location:index.html");
        
        }  
        else
            echo "Usuário não encontrado!";
    }

    $conn->close();


?>