 <?php
    session_start();
    include_once('conexao.php');
    
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $dataNasc = $_POST['dataNasc'];
    $pesoIni = $_POST['pesoIni'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexoUser'];
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn,trim(md5($_POST['senha'])));
    $senha2 = mysqli_real_escape_string($conn,trim(md5($_POST['senha2'])));

    
    //$senha = base64_encode($senha); 
    $verificaUser = "select count(*) as total from users where email='$email'";
    $result = mysqli_query($conn,$verificaUser);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existe']= "<p style='color:red';>Usuário ja existe.</p>";
        header('Location:create-account.php');
        exit;
    }
    $sql = "INSERT INTO users VALUES (DEFAULT, '$nome','$dataNasc', '$pesoIni', '$altura', '$sexo','$email','$senha')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = "<p style='color:green';>Usuário cadastrado com sucesso.</p>";
        header("Location: /login.html");
    }

    else if(empty($nome) || empty($email) || 
    empty($senha) || empty($dataNasc) || empty($vericarSenha)){
        $_SESSION['campos_vazios'] = "<p style='color:red';>Campos obrigatórios.</p>";
        header('Location:create-account.php');
        exit;
    }
    else if($senha !== $vericarSenha){
        $_SESSION['senhas_iguais'] = "<p style='color:red';>As senhas são iguais.</p>";
        header('Location:create-account.php');
        exit;
    }
    else{
        header('Location: create-account.php');
    }
    
    $conn->close();
    header('Location: login.html');
    exit;
?>
       



