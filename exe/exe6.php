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

  $aux = 1;
  for($i = $valor; $i > 1; $i--){
		$res = $aux *= $valor; 
    $valor--;
    echo $valor."*"; 
  }
  echo "    resultado: ".$res;

  
}
?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 6</h1>
    <h6>Desenvolva	um	algoritmo	PHP	que	com	base	em	um	valor	informado pelo	usuário calcule	o	seu	fatorial,	
    onde	a	função	fatorial	é:
    Fat(6)	=	6*5*4*3*2*1
    Fat(4)	=	4*3*2*1</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe6.php" method="POST">
      <input class="form-control" type="number" name="valor" id="valor" placeholder="Valor"  required autofocus>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>