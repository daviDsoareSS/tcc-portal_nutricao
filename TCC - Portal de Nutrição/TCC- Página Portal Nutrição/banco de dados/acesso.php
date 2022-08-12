 <?php
    $nome = $_POST['name'];
    $idade = $_POST['age'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    header("Location: login.php");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nike";

    $conn = new mysqli($servername, $username, $password, $database);
   
    $sql = "INSERT INTO cadastro_usuario(nome,idade,email,senha) values ('$nome','$idade','$email','$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "<br>"."Informações inseridas com sucesso!";
    }
    
    else {
        echo "<br>"."Informações não inseridas!";
    }
    $conn->close();
?>


