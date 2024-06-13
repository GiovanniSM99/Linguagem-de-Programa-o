<!DOCTYPE html>
<html>
<head>
	<title>Vetor</title>
</head>
<body>
<?php
	$idade=array();

	$idade[0] = 10;
	$idade[1] = 17;
	$idade[2] = 20;
	$idade[3] = 60;
	$idade[4] = 80;
	$idade[5] = 70;
	$idade[6] = 15;
	$idade[7] = 35;
	$idade[8] = 50;
	$idade[9] = 43;

	$c=0;
	
	$maior=0;

	for($i=0;$i<=9;$i++)
	{
		echo 'O valor da posição '.$i.' é '.$idade[$i].'<br>';

		if($idade[$i]>=18)
		{
			$c++;
		}

		if($idade[$i]>$maior)
		{
			$maior = $idade[$i];
		}

	}
	echo '<br> Tem mais que 18 anos: '. $c.' pessoas'; 
	echo '<br> A maior idade no vetor é '. $maior.' anos'; 
?>
</body>
</html>