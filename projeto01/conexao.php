<?php
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "projeto1";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno())
    {
        printf("Erro ao conectar ao banco de dados: %2\n", mysqli_connect_error());
        exit;
    }
    printf("Banco de dados conectado com sucesso \o/")


?>