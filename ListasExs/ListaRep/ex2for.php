<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 2 - tabuada</title>
</head>
<body>
	<form method="post" action="">
	<h1>Tabuada (Usando "for")</h1><br>
	<label> Digite um número:<br>
	<input type="number" name="txtnumero">
	<input type="submit" name="btncalcular" value="calcular"><br>
	</form>
	<a href="index.php">voltar</a><br>
	<?php 
	$num = $_POST['txtnumero'];
	

	if ($num >=0) {
		for ($i=0; $i<= 10; $i++) { 
			echo "<br> $num X $i =" , $i * $num;
		}
	}
	else {
	   	echo "Número invalido, digite novamente!";
	   }  







	 ?>





</body>
</html>