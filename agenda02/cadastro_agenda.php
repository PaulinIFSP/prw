<?php
    include('conexao.php');
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){        
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }    
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
    

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular,email, dt_cadastro, foto_blob, foto_nome)
            VALUES ('".$nome."', '".$apelido."', '".$end."', '".$bairro."',  '".$cidade."', '".$estado."', '".$tel."', '".$cel."', '".$email."', '".$dt_cadastro."', '".$fotoBlob."', '".$fotoNome."')";
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