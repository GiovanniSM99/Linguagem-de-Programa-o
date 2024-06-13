<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 2 - tabuada</title>
</head>
<body>
	<form method="post" action="">
	<h1>Tabuada (Usando "while")</h1><br>
	<label> Digite um número:<br>
	<input type="number" name="txtnumero">
	<input type="submit" name="btncalcular" value="calcular"><br>
	</form>
	<a href="index.php">voltar</a><br>
	<?php 
	$num = $_POST['txtnumero'];
	$i = 0;
	if ($num >=0) {
		while ($i <=10) {
	   		echo "<br> $num X $i =" ,$i * $num;
	   		$i = $i +1;
		} 
	} 	
	else {
	   	echo "Número invalido, digite novamente!";
	   }   
	








	 ?>





</body>
</html>