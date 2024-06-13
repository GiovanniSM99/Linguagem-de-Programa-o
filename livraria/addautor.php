<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeAutor = $_POST['nomeAutor'];

    $stmt = $pdo->prepare('INSERT INTO tbAutor (nomeAutor) VALUES (?)');
    $stmt->execute([$nomeAutor]);

    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Autor</title>
</head>
<body>
    <h2>Adicionar Autor</h2>   
    <form method = "POST">
        
        <label for= "nomeAutor">Nome do Autor:</label>
        <input type="text" name="nomeAutor" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>