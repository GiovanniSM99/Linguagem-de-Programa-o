<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>

<?php
$soma = 1 ;
for ($i = 2; $i <= 15; $i++) { 
echo "$i + $soma = ";
    $soma += $i;

echo "$soma <br>" ; 
}
echo "A soma dos números de 1 á 15 é: $soma <br>" ;

?>

</body>
</html>