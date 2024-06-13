<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomecliente = $_POST['nomecliente'];
    $telefonecliente = $_POST['telefonecliente'];
    $EmailCliente = $_POST['EmailCliente'];

    $stmt = $pdo->prepare('INSERT INTO tbcliente (nomecliente, telefonecliente, EmailCliente) VALUES (?,?,?)');
    $stmt->execute([$nomecliente, $telefonecliente, $EmailCliente]);
    
    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
</head>
<body>
    <h2>Adicionar Cliente</h2>   
    <form method = "POST">
        
        <label for= "nomecliente">Nome do Cliente:</label>
        <input type="text" name="nomecliente" required><br>

        <label for= "telefonecliente">Telefone do Cliente:</label>
        <input type="text" name="telefonecliente" required><br>

        <label for= "EmailCliente">Email do Cliente:</label>
        <input type="text" name="EmailCliente" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>