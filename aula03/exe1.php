<?php

    function ajusta_salario($salario, $aumento){

        $aumento = $salario * ($aumento/100);
        $novo_salario = $salario + $aumento;
        return "O salário ajustado é: " .$novo_salario;
    }

?>