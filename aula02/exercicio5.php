<?php 

    //Verifica se o ano é bissexto

    $ano = 2023;

    if(( $ano % 4 == 0 && $ano % 100 != 0) || ($ano % 4 == 0 &&  $ano % 100 == 0 && $ano % 400 == 0)) {
        echo "O ano de " .$ano, " é bissexto";
    }
    else{
        echo "O ano de " .$ano, " não é bissexto";
    }

?>
