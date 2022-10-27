<?php
    if(isset($_POST['enviar']))
    {
        $resultado = $_POST['n1'] + $_POST['n2'] + $_POST['n3'];
        if($_POST['n2']<$_POST['n3'])
        {
            echo "<h2>$resultado</h2>";
        }
        if($_POST['n1']>10)
        {
            echo "<h1>$resultado</h1>";
        }
        if($_POST['n3']<$_POST['n2'] & $_POST['n3']<$_POST['n1'])
        {
            echo "<h3>$resultado</h3>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira</title> <style> h1 {color: blue;} h2 {color: green;} h3 {color: red;} </style>
</head>
<body>
<form method="post">
    Primeira Variável:
    <input type="text" name="n1">
    <br>
    Segunda Variável:
    <input type="text" name="n2">
    <br>
    Terceira Variável:
    <input type="text" name="n3">
    <br>
    <br>
    <input type="submit" name="enviar">
</form>
</body>
</html>