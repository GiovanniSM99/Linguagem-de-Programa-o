<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 01</title>
</head>
<body>
	<form method="post" action="">
		<h1>Digite dois números num intervalo de 10 à 100:</h1>
		<input type="number" name="txtn1"><br><br>
		<input type="number" name="txtn2"><br><br>
		<input type="submit" name="btncalcular" value="calcular"><br>
	</form>
	<a href="index.php">voltar</a><br>
	<?php 
		$numero1 = $_POST['txtn1'];
		$numero2 = $_POST['txtn2'];
		$soma = 0;
		$somapares= 0;

		if (($numero1 >= 10 and $numero1 <= 100) && ($numero2 >= 10 and $numero2 <=100)) {
			for ($i = $numero1; $i <= $numero2; $i++) 
			{ 
				echo "$i<br>";
				$soma += $i;
				if ($i %2==0) 
				{
					$somapares += $i;

		   	    } 
			}
		}
			else {
			echo "Digite números válidos!";
			}

			
			echo "<br>A soma de todos os números é: $soma";
			echo "<br>A soma dos números pares é: $somapares";





	 ?>










</body>
</html>