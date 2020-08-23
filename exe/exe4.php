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
  $tamanho=$_POST['tamanho'];
  $sexo=$_POST['m'];
  $sexo=$_POST['f'];

  $ref_h = (72.7 * $tamanho) - 58;
  $ref_m = (62.1 * $tamanho) - 44;

  if ($sexo == 'h') {
    echo "Peso ideial: ".$ref_h;
  }else{
    echo "Peso ideial: ".$ref_m;
  }
}

?>

  <div class="container col-md-8" style="margin-top: 50px; ">
    <h1>Exercício 4</h1>
    <h6>Desenvolva	um	algoritmo	PHP	que	com	base	em	um	tamanho(A) (digitado	pelo	usuário) e	um	sexo(S)
    (digitado	pelo	usuário) seja	impresso	o	peso	ideal	da	pessoa.
    Regra	IMC	(Índice	de	Massa	Corporal)
    a) Para	homens:	(72.7	*	A)	– 58
    b) Para	mulheres:	(62.1	*	A)	– 44.</h6>
  </div>

  <div class="container col-md-5" >
    <br>
    <br>
    <form action="exe4.php" method="POST">
      <input class="form-control" type="floatval" name="tamanho" id="tamanho" placeholder="Tamanho"  required autofocus>
      <br>
      <select name="sexo" class="form-control">
        <option value="">Escolha</option>
        <option value="masculino" name="m">Masculino</option>
        <option value="feminino" name="f">Feminino</option>
      </select>
      <input type="submit" value="Verificar">
    </form>
  </div>
  <br>

</body>
</html>