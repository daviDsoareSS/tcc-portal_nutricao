<?php

$data = date('2004/02/04');
echo $data;

$dataNascimento = $data;
            $data = new DateTime($dataNascimento);

            $resultado = $data->diff(new DateTime( date('Y-m-d')));
            $_SESSION['idade']= $resultado->format( '%Y anos' );

            echo ($_SESSION['idade']);


