<?php

    $dbHost = "Localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "ghostclothesdb";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        echo "ERRO";
    }else{
        echo "CONEXÃO EFETUADA COM SUCESSO";
    }        
?>