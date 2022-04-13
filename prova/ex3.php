<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Login</h1>
    <hr>
    <form method="get">
        <input type="text" name="txtAltura" placeholder="Altura">
        <br><input type="text" name="txtPeso" placeholder="Peso">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $altura = $_GET['txtAltura'];
    $peso = $_GET['txtPeso'];
    $IMC = $peso * ($altura * $altura);

    if($IMC < 17 ){
        
        
            echo "Muito abaixo do peso!";
       
    }
    else if($IMC > 17 && $IMC <= 18.49){
       
        
            echo "Abaixo do peso!";
        
    } 
    else if($IMC >= 18.50 && $IMC <= 24.99){
       
        echo "Peso Normal!";
    
    } else if($IMC >= 25 && $IMC <= 29.99){
       
        echo "Acima do peso!";

     } else if($IMC >= 30 && $IMC <= 34.99){
       
        echo "Obesidade 1!";

     }  else if($IMC >= 35 && $IMC <= 39.99){
       
        echo "Obesidade 2 (SEVERA)!";

     } else{
        echo "Obesidade 3 (MÓRBIDA)!";
     }
?>