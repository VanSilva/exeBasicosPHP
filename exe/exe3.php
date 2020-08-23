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
  $g=$_POST['g'];
  $a=$_POST['a'];

  $valor = ($g * 0.7);

  if ($valor >= $a) {
    echo "Abasteça com álcool!";
  }else{
    echo "Abasteça com gasolina!";
  }
}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 3</h1>
    <h6>Desenvolva	um	algoritmo	PHP	que	com	base	no	valor	da	gasolina (digitado	pelo	usuário)	e	no	valor	do	
    álcool (digitado	pelo	usuário) ele	informe	se	é	mais	econômico	abastecer	com	gasolina	ou	com	álcool.
    a) valor	da	gasolina	*	0.7,	se	o	resultado	for	maior	que	o	valor	do	álcool	“abasteça	com	álcool”,	senão	
    “abasteça	com	gasolina”.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe3.php" method="POST">
      <input class="form-control" type="number" name="g" id="g" placeholder="Gasolina"  required autofocus>
      <br>
      <input class="form-control" type="number" name="a" id="a" placeholder="Alcool" required>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>