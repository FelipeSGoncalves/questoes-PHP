<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <title>Par ou Impar</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Digite um número qualquer para saber se é par ou impar</h1>
    <form method="POST">
            <input type="number" placeholder="Digite..." name="numero">
            <input type="submit" value="OK">
    </form>
    <?php
        if(isset($_POST['numero'])){
            $numero= addslashes($_POST['numero']);
        if ($numero % 2==0) {
            echo "$numero é par!";
        }else{
            echo "$numero é impar!";
        }
        }   
    ?>
</body>
</html>

