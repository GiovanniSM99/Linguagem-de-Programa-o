<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "post">


    <select name="slComb">
        <option>Escolha um combustível</option>
        <option value="g">Gasolina</option>
        <option value="a">Álcool</option>
        <option value="d">Diesel</option>
       

    </select>

    <br><br>
    
    <select name="slPag">
        <option>Escolha um Estado</option>
        <option value="v">À Vista</option>
        <option value="p">Parcelado</option>
      

    </select>
    <br><br>
    <input type="text" name="txtLitros"><br>
    <input type="submit" name="btnCalcular" value="Calcular">

</form>

<?php

    $comb =  $_POST['slComb'];
    $pag = $_POST['slPag'];
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