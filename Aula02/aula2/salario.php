<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora Salário</title>
</head>
<body>
    <h1>Calculadora de Salário Líquido</h1>
    <form method="post" action="verificarSalario.php">
        <label for="salario_bruto">Salário Bruto:</label><br>
        <input type="number" name="txtSalario_bruto" step="0.01" required><br>

        <label for="descontos">Total de Descontos:</label><br>
        <input type="number" name="txtDescontos" step="0.01" required><br>

        <input type="submit" value="Calcular Salário Líquido">
        <input type="reset" value="Reiniciar">
    </form>
</body>
</html>