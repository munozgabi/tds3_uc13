<?php

    $nome = "Maria da Silva";
    $codigo = " AAA01";

    //tamanho da string
    echo "Tamanho: " .strlen($nome);
    echo "<br>";

    //tudo minuscuclo
    echo strtolower($nome);
    echo "<br>";

    //tudo maiusculo
    echo strtoupper($nome);
    echo "<br>";

    //so a primeira letra maiuscula
    echo ucfirst($nome);
    echo "<br>";

    //a primeira de cada palavra em maiusculo
    echo ucwords($nome);

    echo "<br>";

    //verifica o começo
    if(str_starts_with($codigo, "AAA")){
        echo $codigo. " - Código Válido";
    }
    else{
        echo $codigo. " - Código Inválido";
    }

    //trim tira os espaços
    $codigo_limpo = trim($codigo);
    echo "<br>";

    //tira os espaços e verifica se está vazio 
    if(empty(trim($codigo))){
        echo "Está vazio";
    }
    else{
        echo "Não está vazio";

    }

    if(strlen(trim($codigo)) == 0){
        echo "Está vazio";
    }
    else{
        echo "Não está vazio";

    }

    //cada caracter vira um elemento do array
    $str = "Hello Friend";

    $a1 = str_split($str);
    $a2 = str_split($str, 3);

    echo "<pre>";
    print_r($a1);
    echo "</pre>";

    echo "<pre>";
    print_r($a2);
    echo "</pre>";

    //separador
    $cadastro = "Maria;012345;maria@gmail.com;23;AV Brasil, Centro, 123";
    $array_cadastro = explode(";", $cadastro);
    echo "<pre>";
    print_r($array_cadastro);
    echo "</pre>";
?>