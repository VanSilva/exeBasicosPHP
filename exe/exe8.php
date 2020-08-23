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
  $texto=$_POST['txt'];

  $texto = file_get_contents('C:\Users\vanes\Desktop\teste.txt');

  $palavras = str_split($texto);

  $tamanhos = array();
  foreach($palavras as $palavra) $tamanhos[] = strlen($palavra);

  for ($i = 0; $i < sizeof($palavras); $i++) {
    echo  $i . '.) "' . $palavras[$i] . '"  - ' . $tamanhos[$i] . '<br>';
  }

}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 8</h1>
    <h6>Desenvolva	um	algoritmo	PHP	que receba	como	entrada	um	arquivo	TXT	e	imprima	a	quantidade	que	
      cada	letra	de	A-Z	apareceu	no	texto.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe8.php" method="POST">
      <input class="form-control" type="file" name="txt" id="txt" placeholder="Valor 1"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>