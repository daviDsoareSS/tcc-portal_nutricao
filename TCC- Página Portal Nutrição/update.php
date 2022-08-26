<?php
include('protect.php');
include('entrada-login.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$altura = $_POST['altura'];



$sql = "UPDATE users SET 
email = '$email',
nome = '$nome',
altura = '$altura' WHERE idUser = '$_SESSION[id]'"; 

 $_SESSION['nome'] = $nome['nome'];
 $_SESSION['email'] = $email['email'];
 $_SESSION['altura'] = $altura['altura'];

$result = $conn->query($sql) or die("Falha ao editar perfil: ". $conn->error);

header('Location:perfil.php');

?>