<!DOCTYPE html>
<html>
<head>
	<title>EX.2</title>
</head>
<body>

<form method="post" action="">
		<label>Digite um número de 1 a 12</label><br>
		<input type="number" min= "1" max= "12" name="txtmes"><br><br>
        <input type="submit" name="btnMostrarMês" value="Mostrar Mês">

<?php

    $meses = $_POST['txtmes'];

	$mes=array();

   

	$mes[0] = "Janeiro";
	$mes[1] = "Fevereiro";
	$mes[2] = "Março";
	$mes[3] = "Abril";
	$mes[4] = "Maio";
	$mes[5] = "Junho";
	$mes[6] = "Julho";
	$mes[7] = "Agosto";
	$mes[8] = "Setembro";
	$mes[9] = "Outubro";
    $mes[10] = "Novembro";
    $mes[11] = "Dezembro";

    echo' O mês é: '. $mes[$meses -1 ];
?>


</body>
</html>