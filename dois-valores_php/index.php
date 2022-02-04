<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <title>Dois Numeros</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Digite dois números quaiquer</h1>
    <form method="POST">
            <input type="number" placeholder="Digite..." name="numero1">
            <input type="number" placeholder="Digite..." name="numero2">
            <input type="submit" value="OK">
    </form>
    <?php
        if(isset($_POST['numero1'])){
            $numero1= addslashes($_POST['numero1']);
            $numero2= addslashes($_POST['numero2']);
            if ($numero1 == $numero2) {
                echo "Números iguais!";
            }else if($numero1 > $numero2){
                echo "O primeiro é maior!";
            }else{
                echo "O segundo é maior!";
            }
        }   
    ?>
</body>
</html>
