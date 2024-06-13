<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeAluno = $_POST['nomeAluno'];

    $stmt = $pdo->prepare('INSERT INTO tbaluno (nomeAluno) VALUES (?)');
    $stmt->execute([$nomeAluno]);

    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
</head>
<body>
    <h2>Adicionar Aluno</h2>   
    <form method = "POST">
        
        <label for= "nomeAluno">Nome do Aluno:</label>
        <input type="text" name="nomeAluno" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>