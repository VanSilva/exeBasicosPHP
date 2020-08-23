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
  $valor=$_POST['valor'];

  for( $i = 0; $i <= $valor; $i++ ) {
   echo $i." ";
  }

}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 5</h1>
    <h6>Desenvolva	 um	 algoritmo	 PHP	 que, com	 base	 em	 um	 valor	 digitado	 pelo	 usuário,	 imprima	 todos	 os	
    valores	de	0	até	ele.	Por	exemplo:	valor	informado	é	4,	então,	imprima	0	1	2	3	4.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe5.php" method="POST">
      <input class="form-control" type="number" name="valor" id="valor" placeholder="Valor"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>