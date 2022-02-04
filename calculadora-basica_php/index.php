<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <h1>Digite 2 números e escolha a operação</h1>
    <form method="POST">
        <input type="number" placeholder="Digite aqui" name="numero1">
        <input type="number" placeholder="Digite aqui" name="numero2">
        <p>Escolha uma operação:</p>
        <select name="tipo">
            <option selected="selected">Somar</option>
            <option>Subtrair</option>
            <option>Multiplicar</option>
            <option>Dividir</option>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php
        $valor1 = addslashes($_POST['numero1']);
        $valor2 = addslashes($_POST['numero2']);
    if(!empty($valor1) && !empty($valor2)){ 
        $tipo = $_POST['tipo'];    
        $resultado = 0;
        switch($tipo){
            case 'Somar': 
                $resultado = $valor1 + $valor2; 
                break;
            case 'Subtrair': 
                $resultado = $valor1 - $valor2; 
                break;
            case 'Multiplicar': 
                $resultado = $valor1 * $valor2; 
                break;
            case 'Dividir': 
                $resultado = $valor1 / $valor2; 
                break;
        }
        echo ("o resultado é:");
        echo $resultado;
    }
    ?>
</body>
</html>