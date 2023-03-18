<?php 
    $jogo = [
        array[1, "26", 11],
        array[2, "José", 4],
        array[3, "Zeca", 22]
    ];

        echo "Os pontos de " .$jogo[1][1] ."são: " .$jogo[1][2];
        $jogo[1][2] = 30;
        echo "Os pontos de " .$jogo[1][1] ."são: " .$jogo[1][2];
?>