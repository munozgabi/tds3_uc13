<?php

    require_once "funcao1.php";
    require_once "funcao122.php";

     $texto1 = minha_funcao1();
     echo $texto1;
     echo "<br>";
 
     $texto2 = minha_funcao2(" SENAC");
     echo $texto2;
     echo "<br>";
 
     $texto3 = minha_funcao2(" SENAC", 500);
     echo $texto3;
     echo "<br>";

     $texto4 = minha_funcao3();
     echo "<br>Retorno função 3: " .$texto4;

?>