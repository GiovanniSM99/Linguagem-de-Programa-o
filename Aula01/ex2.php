<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produto</title>
</head>
<body>

	<form method="post" action="">
		<label>Digite a quantidade:</label><br>
		<input type="number" name="txtQtde"><br><br>

		<input type="submit" name="btnCalcular" value="Calcular">
	</form>

	<?php

	$Qtde= $_POST['txtQtde'];

	$Valor=0;
	if ($Qtde<=0) {
		echo"<br> Valor Invalido";
	}
	elseif ($Qtde<=3) {
		$Valor = $Qtde*5;
	}
	elseif ($Qtde<=6) {
		$Valor = $Qtde*4;
	}
	else
	{
		$Valor = $Qtde*3;
	}

	echo"<br>O valor a pagar é: $Valor"

	?>
</body>
</html>