<?php
    include('conexao.php');
    
    $data = $_POST['data']; 
    $tipo = $_POST['tipo']; 
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    echo "<h1> Cadastro Fluxo de Caixa</h1>";
    echo "<p> data: " . $data . "<br>";
    echo "tipo: " . $tipo . "<br>";
    echo "historico: " . $historico . "<br>";
    echo "cheque: " . $cheque . "</p>";
	
	$sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque) 
	        VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
	//echo $sql;
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>