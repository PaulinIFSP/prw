<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <h1 align="center">Listagem Fluxo de Caixa</h1><br>
    <table align="center" border="1" width="700">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Data</th> 
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_fluxocx']. "</td>";
                echo "<td>" .$row['data']. "</td>";
                echo "<td><a href='altera_fluxocx.php?id_fluxocx=".$row['id_fluxocx']."'>" .$row['data']. "</a></td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxocx.php?id_fluxocx=".$row['id_fluxocx']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>