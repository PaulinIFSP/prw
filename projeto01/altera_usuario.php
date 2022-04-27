<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alteração de Usuário - IFSP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Alteração do Usuário</h1>
        <form method="get" action="cadastro_usuario.php">
            <label for="Nome">Nome: </label>
            <input type="text"  name="Nome" value="<?php echo $row['nome_usuario']?>"><br>
            <label for="E-mail">E-mail: </label>
            <input type="text"  name="E-mail" value="<?php echo $row['email_usuario']?>"><br>
            <label for="Telefone">Telefone: </label>
            <input type="text"  name="Telefone" value="<?php echo $row['telefone_usuario']?>"><br>
            <input type="submit"  value="Enviar">
        </form>
    </body>
</html> 