<?php
    include('conexao.php');
     // Upload da foto     
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

    if(strlen($fotoNome) > 0){
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
                foto_blob   ='".$fotoBlob."',
                foto_nome   ='".$fotoNome."'
                WHERE id_agenda=".$id_agenda;
      }
      else
      {
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
      }
      
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar</a>