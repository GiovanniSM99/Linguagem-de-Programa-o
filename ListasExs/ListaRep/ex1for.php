<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 01</title>
</head>
<body>
	<form method="post" action="">
		<h1>Digite dois números:</h1>
		<input type="number" name="txtn1"><br><br>
		<input type="number" name="txtn2"><br><br>
		<input type="submit" name="btncalcular" value="calcular"><br>
	</form>
	<a href="index.php">voltar</a><br>
	<?php
		$quantidade = 0;
		$soma = 0;
		$n1 = $_POST['txtn1'];
		$n2 = $_POST['txtn2'];
		if ($n1 <= 0 or $n2 <= 0) {
			echo "números inválidos, digite novamente";
		}
		if ($n2 > $n1) {
			for ($i=$n1; $i <=$n2 ; $i++){
				echo "$i<br>";
				$soma += $i;
				$quantidade += 1;
			}
		}
			echo "A quantidade de números no intervalo é de: $quantidade<br>";
			if ($quantidade > 15) {
					echo "Excesso de parâmetros<br>";
				}
			else
			{
				echo "Dentro dos parâmetros<br>";
			}	
			echo "A soma dos números é: $soma<br>";
			$media = ($soma / $quantidade);
			echo "A média dos números é igual à: $media<br>";











	 ?>


</body>
</html>