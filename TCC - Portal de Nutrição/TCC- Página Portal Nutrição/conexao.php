<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nutriacao";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;


?>