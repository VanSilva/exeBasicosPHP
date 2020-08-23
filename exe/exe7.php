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
  $n1=$_POST['n1'];
  $n2=$_POST['n2'];

  for( $i = $n1+1; $i < $n2; $i++ ) {
    echo $i." ";
  }
}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 7</h1>
    <h6>Desenvolva	 um	 algoritmo	 PHP	 que	 com	 base	 em	 dois	 valores	 informados	 pelo	 usuário imprima	 os	
    valores	intermediários	a	eles.	Por	exemplo:	valor	3	e	8,	imprime	“4	5	6	7”.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe7.php" method="POST">
      <input class="form-control" type="number" name="n1" id="n1" placeholder="Valor 1"  required autofocus>
      <br>
      <input class="form-control" type="number" name="n2" id="n2" placeholder="Valor 2"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>