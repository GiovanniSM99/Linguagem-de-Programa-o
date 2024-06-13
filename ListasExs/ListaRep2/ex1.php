<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>
    
<?php
$numero = '';

while ($numero!=37){
$numero = rand (0,50);
echo "~$numero<br>";

}
echo "A sequência foi encerrada pois o número $numero foi sorteado";

?>

</body>
</html>