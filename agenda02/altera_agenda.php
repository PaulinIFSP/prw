<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda ='.$id_agenda;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alteração de Agenda - IFSP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Alteração do Agenda</h1>
        <?php echo "<img class='center' src='data:image/jpeg;base64,"
    .base64_encode( $row["foto_blob"] )."'width='150' height='150'/>"; ?>
        <div id="teste">  
            <form method="post" action="altera_agenda_exe.php" enctype='multipart/form-data'>
                <fieldset>
                    <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="Nome">Nome: </label>
                    <input type="text"  name="Nome" value="<?php echo $row['nome']?>"><br>
                </div>    
                    
                    <label for="Apelido">Apelido: </label>
                    <input type="text"  name="Apelido" value="<?php echo $row['apelido']?>"><br>
                    
                <div class="form-item"> 
                    <label for="Endereco">Endereco: </label>
                    <input type="text"  name="Endereco" value="<?php echo $row['endereco']?>"><br>
                </div>     
                    
                <div class="form-item">
                    <label for="Bairro">Bairro: </label>
                    <input type="text"  name="Bairro" value="<?php echo $row['bairro']?>"><br>
                </div>

                <div class="form-item">
                    <label for="Cidade">Cidade: </label>
                    <input type="text"  name="Cidade" value="<?php echo $row['cidade']?>"><br>
                </div>

                <div class="form-item">
                    <label for="Estado">Estado: </label>
                    <input type="text"  name="Estado" value="<?php echo $row['estado']?>"><br>
                </div>

                <div class="form-item">
                    <label for="Telefone">Telefone: </label>
                    <input type="text"  name="Telefone" value="<?php echo $row['telefone']?>"><br>
                </div>

                <div class="form-item">
                    <label for="Celular">Celular: </label>
                    <input type="text"  name="Celular" value="<?php echo $row['celular']?>"><br>
                </div>

                <div class="form-item">
                    <label for="E-mail">E-mail: </label>
                    <input type="text"  name="E-mail" value="<?php echo $row['email']?>"><br>
                </div>

                <div class="form-item">
                    <input type="file" id="foto" name="foto" accept="image/*" />
                </div>

                <div class="form-item">
                    <input type="submit"  value="Enviar">
                </div>

                    <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                </fieldset>
        </form>
        </div> 
    </body>
</html> 