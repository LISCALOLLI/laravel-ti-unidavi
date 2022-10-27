<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinta</title>
</head>
<body>
<h3>Escolha a parcela:</h3>
 <form method="post">
    Escreva o valor:
    <input type="text" name="moto">
    <br>
  <select name="parcela">
   <option value="24">24x</option>
   <option value="36">36x</option>
   <option value="48">48x</option>
   <option value="60">60x</option>
  </select>
  <input type="submit" name="enviar"/>
 </form>
 <?php 
  $parcelas = $_POST['parcela'];
  $mot = $_POST['moto'];
  switch($parcelas){
   case '24':
    $res1 =  pow(1.02,24);
    echo "<br>";
    echo "Juro composto = " . ($mot * $res1) . " <br> Juro simples = " . ($mot * 0.02 * 24);
    break;
   case '36':
    $res1 =  pow(1.023,36);
    echo "<br>";
    echo "Juro composto = " . ($mot * $res1) . " <br> Juro simples = " . ($mot * 0.023 * 36);
    break;
   case '48':
    $res1 =  pow(1.026,48);
    echo "<br>";
    echo "Juro composto = " . ($mot * $res1) . " <br> Juro simples = " . ($mot * 0.026 * 48);
    break;
   case '60':
    $res1 =  pow(1.029,60);
    echo "<br>";
    echo "Juro composto = " . ($mot * $res1) . " <br> Juro simples = " . ($mot * 0.029 * 60);
  }
 ?>
 </body>
</html>