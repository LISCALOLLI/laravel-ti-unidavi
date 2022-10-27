<?php
    if(isset($_POST['enviar']))
    {
        if($_POST['n1'] % 2 == 0)
        {
            echo "É divisivel por 2";
        }
        else{
            echo "Não é divisivel por 2";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda</title>
</head>
<body>
    <form method="post">
    Variável:
    <input type="text" name="n1">
    <br>
    <br>
    <input type="submit" name="enviar">
</form>
</body>
</html>