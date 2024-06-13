<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabela</title>
</head>
<body>
	<h1>Criação de Tabela</h1>

	<form method="POST" action=""> 

	<label>Digite o número de linhas</label><br>
	<input type="number" name="txtlinhas"><br>

	<label>Digite o número de colunas</label><br>
	<input type="number" name="txtcolunas"><br>

	<input type="submit" name="btncriar" value="Criar tabela">
</form>
<a href="index.php">voltar</a><br>
<?php 
	$nlinhas = $_POST['txtlinhas'];
	$ncolunas = $_POST['txtcolunas'];

	if ($nlinhas > 0 and $ncolunas > 0) {
		echo "<h2>Tabela:</h2><table border='2'>";
		for ($l = 1; $l <=$nlinhas ; $l++) {
			echo "<tr>"; 
				for ($c=1; $c <=$ncolunas ; $c++) { 
					echo "<td>Linha &rarr; $l coluna &rarr; $c</td>";
				}
					echo "</tr>";
		}
		echo "</table>";
	}
		else {
			echo "insira um número valido de linhas e colunas";
		}






 ?>








</body>
</html>