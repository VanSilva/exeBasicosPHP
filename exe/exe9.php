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

  function sampling($chars, $size, $combinations = array()) {
    if (empty($combinations)) {
      $combinations = $chars;
    }if ($size == 1) {
      return $combinations;
    }

    $new_combinations = array();

    foreach ($combinations as $combination) {
      foreach ($chars as $char) {
        $new_combinations[] = $combination . $char;
      }
    }
    return sampling($chars, $size - 1, $new_combinations);
  }

  $chars = str_split($str);
  $output = sampling($chars, 2);
  var_dump($output);
}
?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 9</h1>
    <h6>Desenvolva um algoritmo PHP que, com base em uma string informada pelo usuário, imprima todas as
    combinações possíveis de palavras. Ex: Entrada: ABC à Saída: (1) ABC, (2) ACB, (3) BAC, (4) BCA, (5)
    CAB, (6) CBA.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe9.php" method="POST">
      <input class="form-control" type="text" maxlength="2" name="str" id="str" placeholder="Valor"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>