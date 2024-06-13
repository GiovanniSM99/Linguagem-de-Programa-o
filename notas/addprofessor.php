<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeProfessor = $_POST['nomeProfessor'];

    $stmt = $pdo->prepare('INSERT INTO tbProfessor (nomeProfessor) VALUES (?)');
    $stmt->execute([$nomeProfessor]);

    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Professor</title>
</head>
<body>
    <h2>Adicionar Professor</h2>   
    <form method = "POST">
        
        <label for= "nomeProfessor">Nome do Professor:</label>
        <input type="text" name="nomeProfessor" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>