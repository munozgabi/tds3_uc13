<?php 

    $nota1 = 90;
    $nota2 = 80;
    $nota3 = 70;
    $nota4 = 60;

    $mediafinal = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($mediafinal >= 70){
        echo "Aprovado!";
    }
    else if($mediafinal >= 50 && $mediafinal < 70){
        echo "Recuperação";
    }
    else{
        echo "Reprovado";
    }

?>