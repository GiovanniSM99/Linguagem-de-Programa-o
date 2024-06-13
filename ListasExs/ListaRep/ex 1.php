<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    
<form action="" method ="post">
    <label name="NNumero1">Número 1:</label><br>
    <input type ="number" name="txtN1" required><br>

    <label name="NNumero">Número 2:</label><br>
    <input type ="number" name="txtN2" required><br>

    <input type="submit" name="btnCalcularNota" value="Calcular">

</form>

<?php

$N1 = $_POST['txtN1'];
$N2 = $_POST['txtN2'];
$C1 <- $N1;
$C2 = $N1 + $N2;
$C3 = ($N1 + $N2) / 2;
for ($C1=$N1; $C1 <=$N2; $C1++){
echo"$C1<br>";
}
echo" O primeiro número é:$N1 <br>O segundo número é: $N2 <br>$C1 
<br>A soma dos números apresentados: $C2 <br>A média dos números apresentados: $C3";
?>


