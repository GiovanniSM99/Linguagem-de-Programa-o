<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $genero = $_POST['genero'];

    $stmt = $pdo->prepare('INSERT INTO tbgenero (genero) VALUES (?)');
    $stmt->execute([$genero]);

    header ('location: index.php');
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
        
        <label for= "genero">Nome do Gênero:</label>
        <input type="text" name="genero" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>