<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    
    <h1>Conversão de temperatura - F° &rarr; C° </h1>

    <form action="" method="post">
        <label>Digite a Temperatuta em Fahrenheit (F°)</label>
        <br>
        <input type="text" name="txtTemp" id="txtTemp">
        <br>
        <input type="submit" name="btnOk" value="Ok">
    </form>
    <a href="index.php">Voltar</a>

<?php

    $temp = $_POST['txtTemp'];

    $conv = round (($temp-32)/1.8, 2);

    echo"<br>A temperatura em Celsius é: $conv C°";

?>