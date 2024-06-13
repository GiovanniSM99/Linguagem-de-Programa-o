<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="radio" name="rdComb" value="a">Álcool<br>
		<input type="radio" name="rdComb" value="g">Gasolina<br>
		<input type="radio" name="rdComb" value="d">Diesel <br>
		<br>

		<input type="radio" name="rdPag" value="v  ">À Vista<br>
		<input type="radio" name="rdPag" value="p">Parcelado<br>

		<br>
		<input type="text" name="txtLitros"><br>
		<input type="submit" name="btnCalcular" value="Calcular">

	</form>

    <?php

    $comb =  $_POST['rdComb'];
    $pag = $_POST['rdPag'];
    $litros = $_POST['txtLitros'];

    if($comb=="a" && $pag=="p"){
        $res = $litros *3.10;
    }
    elseif ($comb=="a" && $pag=="v") {
        $res = $litros *3.10;
        $des = $res *0.05;
        $res = $res - $des;
    }
    elseif($comb=="g" && $pag=="p"){
        $res = $litros *5.79;
    }
    elseif ($comb=="g" && $pag=="v"){
        $res = $litros *5.79;
        $des = $res *0.08;
        $res = $res - $des;
    }
    elseif($comb=="d" && $pag=="p"){
        $res = $litros *6;
    }
    elseif ($comb=="d" && $pag=="v"){
        $res = $litros *6;
        $des = $res *0.1;
        $res = $res - $des;
    }
    else{    
        $res = 0;
        echo"Por favor, escolha um combustível e uma forma de pagamento<br>";
    }
    echo "Valor a pagar: R$$res";

    ?>

</body>
</html>