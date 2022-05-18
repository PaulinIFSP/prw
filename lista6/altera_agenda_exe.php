<?php
    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['Nome'];
    $apelido = $_POST['Apelido'];
    $end = $_POST['Endereco'];
    $bairro = $_POST['Bairro'];
    $cidade = $_POST['Cidade'];
    $estado = $_POST['Estado'];
    $telefone = $_POST['Telefone'];
    $cel = $_POST['Celular'];
    $email = $_POST['E-mail'];
    $dt_cadastro = date("Y-m-d");
    

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome: " .$nome."</p>";

    $sql = "UPDATE agenda SET
                nome        ='".$nome."',
                apelido     ='".$apelido."',
                endereco    ='".$end."',
                bairro      ='".$bairro."',
                cidade      ='".$cidade."',
                estado      ='".$estado."',
                telefone    ='".$telefone."',
                celular     ='".$cel."',
                email       ='".$email."',
                dt_cadastro ='".$dt_cadastro."'
                WHERE id_agenda=".$id_agenda;

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar</a>