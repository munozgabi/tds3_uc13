<?php

    //Dado um numero faça um algoritmo em php que gere a tabuada
    //A tabuada que sera gerada deve ser informada por uma variavel chamada $tabuada
    //Deve ser utilizado uma estrutura de repetição 
    //Dentro da estrutura de repetição é obrigatório fazer o calculo
    //Deve ser utilizado no máximo 2 comandos echo 

    $tabuada = 2;

    for($i=0; $i<=10; $i++){
        $calculo = $tabuada * $i;
        echo $tabuada." x " .$i." = " .$calculo;
        echo "<br>";
    }

?>