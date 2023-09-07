<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'Formulario-local';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno) {
        echo "Error";
    }
    else {
        echo "conexao efetuada com sucesso";
    }
?>