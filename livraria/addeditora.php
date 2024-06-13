<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeEditora = $_POST['nomeEditora'];

    $stmt = $pdo->prepare('INSERT INTO tbEditora (nomeEditora) VALUES (?)');
    $stmt->execute([$nomeEditora]);

    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Editora</title>
</head>
<body>
    <h2>Adicionar Editora</h2>   
    <form method = "POST">
        
        <label for= "nomeEditora">Nome da Editora:</label>
        <input type="text" name="nomeEditora" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>