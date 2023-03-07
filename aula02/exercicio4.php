<?php 

    $ingresso = 10;
    $idade = 18;

    if($idade < 6 || $idade > 65){
        echo "Valor do ingresso: R$ 0";
    }
    else if($idade >= 6 && $idade <= 10){
        $desconto = $ingresso * 0.50;
        $novo_ingresso = $ingresso - $desconto;
        echo "Valor do ingresso: R$ " .$novo_ingresso;
    }
    else{
        echo "Valor do ingresso: R$ " .$ingresso;
    }


?>