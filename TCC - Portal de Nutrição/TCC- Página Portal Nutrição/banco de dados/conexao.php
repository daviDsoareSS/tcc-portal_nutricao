<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "nike";

$mysqli = new mysqli($servername, $username, $password, $database );

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: ".$mysqli->error);
}

?>