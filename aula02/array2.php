<?php 

    $array1 = [10, 20, 30];
    
    $array1[] = 100;
    $array1[] = 200;
    $array1[] = 300;

    $ultima_posicao = sizeof($array1) - 1;
    echo "Ultima posição: " .$ultima_posicao;
    echo "<br>";

    echo "Elemento posição 1: " .$array1($ultima_posicao);
    echo "<br>";
    echo "Elemento posição 1: " .$array1[sizeof($array1)-1];

    echo "<pre>";
    print_r($array1);
    echo "</pre>";



?>