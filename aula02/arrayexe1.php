<?php

    $dados = ["Gabriela", "Larissa", "Bruna", "Daniela", "Rafaela", "Isadora", "Natalia", "Julia", "Maria", "Eduarda"];

    
    for($i = 0; $i<=sizeof($dados)-1; $i++){
        echo "Nome: " .$dados[$i] ."<br>";
    }
    
    echo "<br>";
    
    for($i = sizeof($dados)-1; $i>=0; $i--){
        echo "Nome: " .$dados[$i] ."<br>";
    }


?>