<?php 

    $salario = 1000;

    if($salario <= 1500){
        $aumento = $salario * 0.15;
        $novo_salario = $salario + $aumento;
        //echo "15% | Novo salário: R$ " .$novo_salario;
    }
    else if($salario > 1500 && $salario <= 3000){
        $aumento = $salario * 0.10;
        $novo_salario = $salario + $aumento;
        //echo "10% | Novo salário: R$ " .$novo_salario;
    }
    else{
        $aumento = $salario * 0.05;
        $novo_salario = $salario + $aumento;
        //echo "5% | Novo salário: R$ " .$novo_salario;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento Salário</title>
</head>
<body>
    <?php
        echo "Novo salário: <b>R$ " .number_format($novo_salario, 2, ".", ","), "</b>";
    ?>
</body>
</html>