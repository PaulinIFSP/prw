<?php
   include('conexao.php');
   $id_fluxocx = $_GET['id_fluxocx'];
   $sql = 'SELECT * FROM fluxo_caixa where id_fluxocx='.$id_fluxocx;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro Fluxo Caixa</h1>
    
    <div id="teste">
        <form method="post" action="altera_fluxocx_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" value="<?php echo $row['data']?>" placeholder="Digite a data:">
                </div>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type="tipo" id="tipo" name="tipo" value="<?php echo $row['tipo']?>" placeholder="Digite o tipo:">
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor']?>" placeholder="Digite o valor:">
                </div>
                <div class="form-item">
                    <label for="historico">Histórico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico']?>" placeholder="Digite o historico:">
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <input type="text" id="cheque" name="cheque" value="<?php echo $row['cheque']?>" placeholder="Digite o cheque:">
                </div>                       
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_fluxocx" type="hidden" value="<?php echo $row['id_fluxocx']?>">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>