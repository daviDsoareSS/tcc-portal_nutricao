<?php
    session_start();
    require_once("conexao.php");
    
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['email'] = $email;
    //$senha=base64_encode($senha);
    if ($conn->connect_error) {
        die("Falha na conexão " . $conn->connect_error);
    }

    $sql = "SELECT email, senha FROM users;";
    $dadosUser = "SELECT email , nome , dataNasc , pesoIni, altura , sexo FROM users;";
    $result = $conn->query($sql);  // aqui
    $logged = false;
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){
            header("location:index.php");   
            $logged = true;
            $_SESSION['email'] = $email;
        }  
        else
            echo "Usuário não encontrado!";
    }

    if(isset($_SESSION['email'])){
        if($_SESSION['email']!=""){
            $logged = true;
        }
    }
    if(isset($_GET['sair'])){
        $_SESSION['email']="";
        $logged = false;
        unset($_SESSION['email']);
        session_destroy();
        header('login.html');
        
    }
    $conn->close();


?>