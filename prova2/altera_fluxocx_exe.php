<?php
  include('conexao.php');
  
  $id_fluxocx = $_POST['id_fluxocx'];
  $data = $_POST['data'];
  $tipo = $_POST['tipo'];
  $valor = $_POST['valor'];
  $historico = $_POST['historico'];
  $cheque = $_POST['cheque'];
      
  echo "<h1> Alteração de dados </h1>";
  echo "<p> Data: " . $data . "<p>";  

    $sql = "UPDATE fluxo_caixa SET
              data ='".$nome."',
              tipo='".$email."',
              valor='".$telefone."',
              historico='".$fotoBlob."',
              cheque='".$fotoNome."'
            WHERE id_fluxocx=".$id_fluxocx;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>