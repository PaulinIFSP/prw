<?php
    include('conexao.php');
    $nome = $_GET['Nome'];
    $email = $_GET['E-mail'];
    $tel = $_GET['Telefone'];

    echo "Nome: ".$nome."<br>";
    echo "E-mail: ".$email."<br>";
    echo "Telefone: ".$tel;

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
            VALUES ('".$nome."', '".$email."', '".$tel."')";

    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados inseridos com sucesso";
    }
    else
    {
        echo "Erro ao inserir no banco de dados: " .mysqli_error($con);
    }
   
    
?> 