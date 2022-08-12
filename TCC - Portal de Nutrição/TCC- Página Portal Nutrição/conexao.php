<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nutriacao";

$conn = new mysqli($servername, $username, $password, $database );

if($conn->error){
    die("Falha ao conectar ao banco de dados: ".$conn->error);
}

?>