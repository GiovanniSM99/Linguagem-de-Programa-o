<!DOCTYPE html>
<html>
<head>
	<title>Vetor</title>
</head>
<body>
<?php
	$nota=array();

	$nota[0] = 5;
	$nota[1] = 7;
	$nota[2] = 6;
	$nota[3] = 9;
	
	$c=0;
	
	$maiornota=0;
    $menornota= $nota[0];

	for($i=0;$i<=3;$i++)
	{
		echo 'O valor da posição '.$i.' é '.$nota[$i].'<br>';

		if($nota[$i]>$maiornota)
		{
			$maiornota = $nota[$i];
		}

        if($nota[$i]<$menornota)
		{
			$menornota = $nota[$i];
		}

        $c = $c + $nota[$i];
	}
        $media = $c /$i;

    echo '<br> A menor nota no vetor é: '. $menornota;
	echo '<br> A média das notas é: '. $media; 
	echo '<br> A maior nota no vetor é: '. $maiornota; 
?>
</body>
</html>