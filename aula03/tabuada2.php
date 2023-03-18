<?php 
    //Faça um algoritmo utilizando dois FOR que gere a tabuada do 0 ao 10

    for($j=0; $j<=10; $j++){
        $tabuada = $j;
    
        for($i=0; $i<=10; $i++){
            $calculo = $tabuada * $i;
            echo $tabuada." x " .$i." = " .$calculo;
            echo "<br>";
        }
        echo "<br>";
    }
?>