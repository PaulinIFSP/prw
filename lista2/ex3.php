<?php
    for($i=1; $i<=200; $i++)
    {
        $primo = 1;
        for($d=2; $d<$i; $d++){
            if($i%$d == 0){
                $primo = 0;
                break;
            }
        }
        if($primo){
            echo $i." Esse número é primo!<br>";
        }
        else{
            echo $i." Esse número não é primo!<br>";
        }
    }
    echo $soma."<br>";
    

?>
