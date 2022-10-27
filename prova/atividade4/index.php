<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarta</title>
</head>
<body>
<h3>Escolha a parcela:</h3>
 <form method="post">
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
  $mot = 8.654;
  switch($parcelas){
   case '24':
    echo "Valor total = " . ($mot * 0.015) + $mot . " <br> Parcela = " . (($mot * 0.015) + $mot)/24;
    break;
   case '36':
    echo "Valor total = " . ($mot * 0.020) + $mot . " <br> Parcela = " . (($mot * 0.020) + $mot)/36;
    break;
   case '48':
    echo "Valor total = " . ($mot * 0.025) + $mot . " <br> Parcela = " . (($mot * 0.025) + $mot)/48;
    break;
   case '60':
    echo "Valor total = " . ($mot * 0.030) + $mot . " <br> Parcela = " . (($mot * 0.030) + $mot)/60;
  }
 ?>
 </body>
</html>