<?php 
    $dados[] = array("Nome" => "Maria", "Data_Nasc" => "10/10/1985", "Salário" => 2500, "Cod_Cargo" => 3);
    $dados[] = array("Nome" => "João", "Data_Nasc" => "01/01/1983", "Salário" => 1500, "Cod_Cargo" => 1);
    $dados[] = array("Nome" => "Pedro", "Data_Nasc" => "15/11/1994", "Salário" => 4500, "Cod_Cargo" => 4);
    $dados[] = array("Nome" => "Carla", "Data_Nasc" => "25/03/1994", "Salário" => 1500, "Cod_Cargo" => 1);
    $dados[] = array("Nome" => "Pedro", "Data_Nasc" => "15/11/1994", "Salário" => 4500, "Cod_Cargo" => 4);
    
    /*
    for($i = 0; $i<sizeof($dados); $i++){
        echo "--------------------------------------";
        echo "<br>";
        echo "Nome: " .$dados[$i]["Nome"]."<br>";
        echo "Data de Nascimento: " .$dados[$i]["Data_Nasc"]."<br>";
        echo "Salário: " .$dados[$i]["Salário"]."<br>";
        echo "Código do Cargo: " .$dados[$i]["Cod_Cargo"]."<br>";
        echo "--------------------------------------";
        echo "<br>";

    }
    
    echo "<h1> Novo salário </h1> <br>";

    for($i = 0; $i<sizeof($dados); $i++){
        if($dados[$i]["Cod_Cargo"] == 1){
            $aumento = $dados[$i]["Salário"] * 0.10;
            $novo_salario = $dados[$i]["Salário"] + $aumento;
            $dados[$i]["Salário"] = $novo_salario;
        }
        echo "--------------------------------------";
        echo "<br>";
        echo "Nome: " .$dados[$i]["Nome"]."<br>";
        echo "Data de Nascimento: " .$dados[$i]["Data_Nasc"]."<br>";
        echo "Salário: " .$dados[$i]["Salário"]."<br>";
        echo "Código do Cargo: " .$dados[$i]["Cod_Cargo"]."<br>";
        echo "--------------------------------------";
        echo "<br>";

    }
    */

    /*
    $pesquisa = "Pedro";
    for($i = 0; $i<sizeof($dados); $i++){
        if($dados[$i]["Nome"] == $pesquisa){
            echo "--------------------------------------";
            echo "<br>";
            echo "Nome: " .$dados[$i]["Nome"]."<br>";
            echo "Data de Nascimento: " .$dados[$i]["Data_Nasc"]."<br>";
            echo "Salário: " .$dados[$i]["Salário"]."<br>";
            echo "Código do Cargo: " .$dados[$i]["Cod_Cargo"]."<br>";
            echo "--------------------------------------";
            echo "<br>";

        }
    
    }

    */

    //nao funciona no array associativo
    $pesquisa = "Mac";
    $nomes = array("Mac", "Windows", "Linux");
        if(in_array($pesquisa, $nomes)){
            echo "Existe Mac";
        }

    /*
    echo "<pre>";
    print_r($dados);
    echo "</pre>";
    */

    //ctrl + f2 
?>