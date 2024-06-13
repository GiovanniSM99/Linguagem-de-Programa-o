<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeVet = $_POST['nomeVet'];

    $stmt = $pdo->prepare('INSERT INTO tbveterinario (nomeVet) VALUES (?)');
    $stmt->execute([$nomeVet]);
    
    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Veterinário</title>
</head>
<body>
    <h2>Adicionar Veterinário</h2>   
    <form method = "POST">
        
        <label for= "nomeVet">Nome do Veterinário:</label>
        <input type="text" name="nomeVet" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>