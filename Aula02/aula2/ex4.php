<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 04</title>
</head>
<body>

	<form method="post">
		<label for="Custo_Produção">Custo para Produção:</label><br>
        <input type="number" name="txtCusto_Producao" required><br>

        <label for="Preço_Venda">Preço de Venda</label><br>
        <input type="number" name="txtPreco_Venda" required><br>

        <label for="Quantidade_Vendida">Quantidade Vendida</label><br>
        <input type="number" name="txtQuantidade_Vendida" required><br>

        <input type="submit" value="Calcular">
	</form>


    <?php
    $Custo = $_POST['txtCusto_Producao']; //Custo para produção
    $PDV = $_POST['txtPreco_Venda']; //Preço de venda
    $QuantV = $_POST['txtQuantidade_Vendida']; //Quantidade vendida
    $VTV = $PDV * $QuantV; //O valor total vendido
    $LucroU = $PDV - $Custo; //Lucro por unidade
    $LucroT = $LucroU * $QuantV; //Lucro total

    echo"<br>O valor total vendido é: $VTV<br>";
    echo"O lucro por unidade é: $LucroU<br>";
    echo"O lucro total é: $LucroT<br>";

    ?>
   

</body>
</html>