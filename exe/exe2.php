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
  $n3=$_POST['n3'];
  $n4=$_POST['n4'];

  $media = ($n1 + $n2 + $n3 + $n4) / 4;

  if ($media >= 7) {
    echo "Aluno Aprovado!";
  }elseif (($media < 7) && ($media >= 5)){
    echo "Aluno em Exame!";
    $tirar = (7 - $media);
    echo "O aluno precisa tirar ".$tirar." na recuperação"; 
  }else{
    echo "Aluno Reprovado!";
  }
}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 2</h1>
    <h6>. Desenvolva	 um	 algoritmo	 PHP	 que	 com	 base	 em	 quatro	 notas	 (digitadas pelo	 usuário) de	 um	
    determinado	 aluno,	 calcule	 a	 média	 aritmética	 das	 notas	 informadas	 e	 imprima	 uma mensagem
    informando	se	o	aluno	está	passado (nota>=7),	se	o	aluno	está	em	recuperação (nota menor igual 5)	e	(nota 7)	ou	
    se	 o	 aluno	 está	reprovado nota 5. Caso	 o	 aluno	 esteja	 em	 recuperação	 imprima	 qual	 a	 nota	 que	 o	
    aluno	deverá	tirar	na	recuperação	para	ser	aprovado.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe2.php" method="POST">
      <input class="form-control" type="number" name="n1" id="n1" placeholder="n1"  required autofocus>
      <br>
      <input class="form-control" type="number" name="n2" id="n2" placeholder="n2" required>
      <br>
      <input class="form-control" type="number" name="n3" id="n3" placeholder="n3" required>
      <br>
      <input class="form-control" type="number" name="n4" id="n4" placeholder="n4" required>
      <br>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>