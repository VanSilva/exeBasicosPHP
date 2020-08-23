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
  $numbers[0]=$_POST['n1'];
  $numbers[1]=$_POST['n2'];
  $numbers[2]=$_POST['n3'];
  $numbers[3]=$_POST['n4'];
  $numbers[4]=$_POST['n5'];

  $array_size = count($numbers);

  for ( $i = 0; $i < $array_size; $i++ ) {
    for ($j = 0; $j < $array_size; $j++ ) {
      if ($numbers[$i] < $numbers[$j]) {
        $temp = $numbers[$i];
        $numbers[$i] = $numbers[$j];
        $numbers[$j] = $temp;
      }
    }
  }


echo "Numeros ordenados: ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i]." ";
}
?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 1</h1>
    <h6>Desenvolva	 um	 algoritmo	 PHP	 que, com	 base	 em	 5 valores	 digitados	 pelo	 usuário,	seja impressa a	
ordenação	desses	valores.	Neste	caso	pode-se	utilizar	algoritmos	de	ordenação,	tais	como:	bubble	sort,	
merge	sort,	quick	sort,	etc.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe1.php" method="POST">
      <input class="form-control" type="number" name="n1" id="n1" placeholder="n1"  required autofocus>
      <br>
      <input class="form-control" type="number" name="n2" id="n2" placeholder="n2" required>
      <br>
      <input class="form-control" type="number" name="n3" id="n3" placeholder="n3" required>
      <br>
      <input class="form-control" type="number" name="n4" id="n4" placeholder="n4" required>
      <br>
      <input class="form-control" type="number" name="n5" id="n5" placeholder="n5" required>
      <br>
      <input type="submit" value="Ordenar">
    </form>
  </div>
  <br>

</body>
</html>