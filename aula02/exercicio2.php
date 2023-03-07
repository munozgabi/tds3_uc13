<?php 

    $nota1 = 9;
    $nota2 = 8;
    $nota3 = 7;
    $nota4 = 6;

    $mediafinal = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($mediafinal >= 70){
        echo "Aprovado!";
    }
    else if($mediafinal >= 50 && $mediafinal < 70){
        echo "Recuperação";
    }
    else if($mediafinal < 50){
        echo "Reprovado";
    }

?>