<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Média</title>
</head>
<body>

	<form method="post" action="">
		<label>Digite a primeira nota</label><br>
		<input type="text" name="txtNota1"><br><br>

		<label>Digite a segunda nota</label><br>
		<input type="text" name="txtNota2"><br><br>

		<input type="submit" name="btnCalcular" value="Calcular">
	</form>

	<?php

		$Nota1 = $_POST['txtNota1'];
		$Nota2 = $_POST['txtNota2'];

		$Media = ($Nota1 + $Nota2) / 2 ;

		echo " <br> A média das notas é: $Media";
		if ($Media>=6) {
			echo "<br>Aluno aprovado";
		}
		elseif ($Media>=4 && $Media<6) {
			echo "<br>Aluno de recuperação";
		}
		else
			echo"<br>Aluno reprovado";
	?>

</body>
</html>