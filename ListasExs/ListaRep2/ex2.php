<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2</title>
</head>
<body>
    
<form method="post" action="">
	<label> Digite um número:<br>
	<input type="number" name="txtnumero">
	<input type="submit" name="btncalcular" value="calcular"><br>
	</form>

<?php
$numero = $_POST['txtnumero'];
$num50 = $numero +50;
$hoje = date('d/m/Y');
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       date_default_timezone_set( 'America/Sao_Paulo' );
       
    for ($i=$numero; $i<=$num50; $i++) { 
        echo "<br>~ $i -- $hoje -- "; echo strftime('%T');
    }

?>

</body>
</html>