<?php
    include('conexao.php');
    $nome = $_POST['Nome'];
    $apelido = $_POST['Apelido'];
    $end = $_POST['Endereco'];
    $bairro = $_POST['Bairro'];
    $cidade = $_POST['Cidade'];
    $estado = $_POST['Estado'];
    $tel = $_POST['Telefone'];
    $cel = $_POST['Celular'];
    $email = $_POST['E-mail'];
    $dt_cadastro = date("Y-m-d");
    echo "Nome: ".$nome."<br>";
    echo "Apelido: ".$apelido."<br>";
    echo "Endereço: ".$end."<br>";
    echo "Bairro: ".$bairro."<br>";
    echo "Cidade: ".$cidade."<br>";
    echo "Estado: ".$estado."<br>";
    echo "Telefone: ".$tel."<br>";
    echo "Celular: ".$cel."<br>";
    echo "E-mail: ".$email;
    

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular,email, dt_cadastro)
            VALUES ('".$nome."', '".$apelido."', '".$end."', '".$bairro."',  '".$cidade."', '".$estado."', '".$tel."', '".$cel."', '".$email."', '".$dt_cadastro."')";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados inseridos com sucesso <br>";
    }
    else
    {
        echo "Erro ao inserir no banco de dados: " .mysqli_error($con);
    }
   
    
?> 