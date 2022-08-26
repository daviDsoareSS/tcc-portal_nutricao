<?php
include('protect.php');
include('entrada-login.php');


$sql = "UPDATE FROM users SET 
email = '$_SESSION[email]',
nome = '$_SESSION[nome]',
altura = '$_SESSION[altura]' WHERE idUser = '$_SESSION[id]',"; 

$result = $conn->query($sql) or die("Falha ao editar perfil: ". $conn->error);

header('Location:perfil.php');

?>