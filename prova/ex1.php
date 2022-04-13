<?php
$salário = 1000;

if($salário <= 300)
{
    $salário = $salário + ($salário * 0.5);
    echo "O novo Salário com o reajuste é de: R$" . $salário .",00";

}else
    if($salário > 300)
    {
    $salário = $salário + ($salário * 0.3);
    echo "O novo Salário com o reajuste é de: R$" . $salário .",00";
    }
?>