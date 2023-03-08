<?php

    $array1 = array(100, 200, 300);
    $array2 = [10, 20, 30];

    echo $array1[0];
    echo "<br>";
    echo $array2[0];

    echo "<br>";

    //Mostra as posições, tipo e valores do array
    echo "<pre>";
    var_dump($array1);
    echo "<pre>";

    echo "<br>";

    //Mostra as posições e valores do array
    echo "<pre>";
    print_r($array2);
    echo "<pre>";

    //Força o código parar
    //exit(1);

?>