<?php
    $n1 = 8;
    $n2 = 10;
    $n3 = 9.9;
    if($n1 > $n2 && $n1 > $n3){
        if($n2 > $n3)
        {
            echo "A ordem descrecente é: ". $n1.", ".$n2.", ".$n3;
        }else{
            
            echo "A ordem descrecente é: ". $n1.", ".$n3.", ".$n2;
        }
    }
    else if($n2 > $n1 && $n2 > $n3){
        if($n1 > $n3)
        {
            echo "A ordem descrecente é: ". $n2.", ".$n1.", ".$n3;
        }else{
            echo "A ordem descrecente é: ". $n2.", ".$n3.", ".$n1;

        }
    } else {
        if($n1 > $n2)
        {
            echo "A ordem descrecente é: ". $n3.", ".$n1.", ".$n2;
        }else{
            echo "A ordem descrecente é: ". $n3.", ".$n2.", ".$n1;

        }
    }      
?>