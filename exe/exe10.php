<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Bem-vindo!</title>
</head>

<body class="text-center" style="background-color: #f5f5f0;">

<?php

if ($_POST) {

$str=$_POST['str'];

  $a = str_split($str);

  $output = array_reverse($a);
  echo var_dump($output);

}
?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 10</h1>
    <h6>Desenvolva um algoritmo PHP que imprima o reverso de um número informado pelo usuário. Ex: 134 à
    431... 506 à 605... 4 à 4... 15 à 51... etc</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe10.php" method="POST">
      <input class="form-control" type="text" maxlength="5" name="str" id="str" placeholder="Valor"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>