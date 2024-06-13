<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Mês</title>
</head>
<body>

<form action="" method="post">
        Digite um número de 1 a 12:<br>
        <input type="number" name="numero" min="1" max="12" required>
        <button type="submit">Selecionar</button>
</form>

<?php

$meses = [
    1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
    5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
    9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
];

if ($_POST['numero']) {
    $numero = (int)$_POST['numero'];

    if ($numero >= 1 && $numero <= 12) {
        echo "O mês correspondente ao número $numero é: " . $meses[$numero];
    }
}

?>

</body>
</html>