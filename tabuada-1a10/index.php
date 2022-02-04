<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">    
    <title>Tabuada</title>
</head>

<body>
    <h1>Tabuada de 1 a 10</h1>
    <?php
        $resultado=0;
        for($tab = 1; $tab <=10; $tab++){
            for($num = 0; $num<=10; $num++){
                $resultado = $tab * $num;
                echo ($tab." x ".$num." é igual a:");
                echo $resultado;
            ?>
    <br>
    <?php
            }
    ?>
    <br>
    <?php
        }
    ?>
</body>
</html>