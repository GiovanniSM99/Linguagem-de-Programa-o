<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 3</title>
</head>
<body>
    
<form method="post" action="">
	<label> Digite um número de 1 à 10:<br>
	<input type="number" name="txtnumero">
	<input type="submit" name="btncalcular" value="calcular"><br>
	</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["txtnumero"];

    if ($numero >= 1 && $numero <= 10) {
        for ($i = 0; $i < $numero; $i++) {
            echo $numero . "<br>";
        }
    } else {
        echo "Por favor, digite um número de 1 à 10.";
    }
}
?>

</body>
</html>