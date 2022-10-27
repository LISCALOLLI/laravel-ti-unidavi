<?php
if(isset($_POST['enviar']))
{
    $jao = 50;
    $r1 = $_POST['v1'] * $_POST['n1'];
    $r2 = $_POST['v2'] * $_POST['n2'];
    $r3 = $_POST['v3'] * $_POST['n3'];
    $r4 = $_POST['v4'] * $_POST['n4'];
    $r5 = $_POST['v5'] * $_POST['n5'];
    $r6 = $_POST['v6'] * $_POST['n6'];
    $resultado = $r1 + $r2 + $r3 + $r4 + $r5 + $r6;
    if($jao>$resultado)
    {
        $res = $jao - $resultado;
        echo "<h1>Sobrou $res reais</h1>";
    }
    if($jao==$resultado)
    {
        echo "<h2>O saldo foi esgotado!!</h2>";
    }
    if($jao<$resultado)
    {
        $res = $resultado - $jao;
        echo "<h3>Faltou $res reais</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terceira</title><style> h1 {color: blue;} h2 {color: green;} h3 {color: red;} </style>
</head>
<body>
    <h1>Informe o quantidade em KG</h1>
<form method="post">
    Valor Maçã:
    <input type="text" name="v1">
    <br>
    Valor Melancia:
    <input type="text" name="v2">
    <br>
    Valor Laranja:
    <input type="text" name="v3">
    <br>
    Valor Repolho:
    <input type="text" name="v4">
    <br>
    Valor Cenoura:
    <input type="text" name="v5">
    <br>
    Valor Batata:
    <input type="text" name="v6">
    <br>
    Quantidade Maçã:
    <input type="text" name="n1">
    <br>
    Quantidade Melancia:
    <input type="text" name="n2">
    <br>
    Quantidade Laranja:
    <input type="text" name="n3">
    <br>
    Quantidade Repolho:
    <input type="text" name="n4">
    <br>
    Quantidade Cenoura:
    <input type="text" name="n5">
    <br>
    Quantidade Batata:
    <input type="text" name="n6">
    <br>
    <br>
    <input type="submit" name="enviar">
</form>
</body>
</html>