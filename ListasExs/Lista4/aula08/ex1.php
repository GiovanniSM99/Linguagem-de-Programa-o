<!DOCTYPE html>
<html>
<head>
	<title>EX.1</title>
</head>
<body>
<?php
	
	$c= 0;
	$soma = 0;
	$maiorvl= 0;
    $menorvl= 200;

	for($i=0;$i<=19;$i++)
	{

        $vl[$i] = random_int(100,200);

        echo 'O valor da posição '.$i.' é '.$vl[$i].'<br>';

		if($vl[$i]>$maiorvl)
		{
			$maiorvl = $vl[$i];
		}

        if($vl[$i]<$menorvl)
		{
			$menorvl = $vl[$i];
		}

        $soma = $soma + $vl[$i];
        $c = $c + $vl[$i];
	}
        $media = $c /$i;

        sort($vl);
    echo '<br> Valores em ordem crescente: '. implode(', ',$vl);
    echo '<br> O menor valor no vetor é: '. $menorvl;
	echo '<br> A média dos valores é: '. $media; 
	echo '<br> O maior valor no vetor é: '. $maiorvl; 
    echo '<br> A soma dos valores é: '. $soma;
?>
</body>
</html>