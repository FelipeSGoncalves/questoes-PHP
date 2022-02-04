<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">    
    <title>Numeros de 1 a 100</title>
</head>

<body>
    <h1>Valores de 1 a 100</h1>
    <?php
        $soma=0;
        for($num = 0; $num<=100; $num++){
            $soma = $soma + $num;
            echo $num;
    ?>
    <br>
    <?php
        }
    ?>
    <h1>O somatório desses números é:</h1>
    <?php
        echo $soma;
    ?>
    <h1>A média é:</h1>
    <?php
        echo $soma/100;
    ?>
</body>
</html>