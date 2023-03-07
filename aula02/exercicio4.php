<?php 

    $ingresso = 10;
    $idade = 7;

    if($idade < 6 || $idade > 65){
        $novo_ingresso = 0;
    }
    else if($idade >= 6 && $idade <= 10){
        $desconto = $ingresso * 0.50;
        $novo_ingresso = $ingresso - $desconto;
        //echo "Valor do ingresso: R$ " .$novo_ingresso;
    }
    else{
        $novo_ingresso = $ingresso;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresso Valor</title>
</head>
<body>
    <?php 
        echo "Valor do ingresso: R$ " .$novo_ingresso;
    ?>
</body>
</html>