<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];

    $stmt = $pdo->prepare('INSERT INTO genero (nome) VALUES (?)');
    $stmt->execute([$nome]);

    header ('location: add_genero.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Gênero</title>
</head>
<body>
    <h2>Adicionar Gênero</h2>   
    <form method = "POST">
        
        <label for= "nome">Nome do Gênero:</label>
        <input type="text" name="nome" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>