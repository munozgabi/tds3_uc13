<?php 

    $salario = 1000;

    if($salario <= 1500){
        $aumento = $salario * 0.15;
        $novo_salario = $salario + $aumento;
        echo "15% | Novo salário: R$ " .$novo_salario;
    }
    else if($salario > 1500 && $salario <= 3000){
        $aumento = $salario * 0.10;
        $novo_salario = $salario + $aumento;
        echo "10% | Novo salário: R$ " .$novo_salario;
    }
    else{
        $aumento = $salario * 0.05;
        $novo_salario = $salario + $aumento;
        echo "5% | Novo salário: R$ " .$novo_salario;
    }


?>