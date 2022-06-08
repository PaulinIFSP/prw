<?php
    include('conexao.php');
    
	$id_fluxocx = $_GET['id_fluxocx'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id_fluxocx='.$id_fluxocx;
    
	echo "<h1> Exclusão de Fluxo de Caixa </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir fluxo: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_fluxocx.php'> Voltar</a>