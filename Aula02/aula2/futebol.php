<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Idade</title>
</head>
<body>

<form method="post" action="">
		<label>Digite o ano de nascimento:</label><br>
		<input type="number" name="txtAno"><br><br>

		<input type="submit" name="btnCalcular" value="Calcular">
	</form>

	<?php
	$AnoAtual=2024;
	$Idade = $_POST['txtAno'];
	$Diferenca = $AnoAtual - $Idade;

	if ($Diferenca>=6 && $Diferenca<=7) { 
		Echo "Sub 7";
	}

	elseif($Diferenca>=8 && $Diferenca<=9) { 
		Echo "Sub 9";
	}
	elseif($Diferenca>=10 && $Diferenca<=11) { 
		Echo "Sub 11";
	}
	elseif($Diferenca>=12 && $Diferenca<=13) { 
		Echo "Sub 13";
	}
	elseif($Diferenca>=14 && $Diferenca<=15) { 
		Echo "Sub 15";
	}
	elseif($Diferenca>=16 && $Diferenca<=17) { 
		Echo "Sub 17";
	}
	elseif($Diferenca>=18 && $Diferenca<=20) { 
		Echo "Sub 20";
	}
	elseif($Diferenca<6 || $Diferenca>20) { 
		Echo "Está fora das categorias permitidas";
	}



	?>


</body>
</html>