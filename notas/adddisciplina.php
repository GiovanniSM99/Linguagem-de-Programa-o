<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $disciplina = $_POST['disciplina'];

    $stmt = $pdo->prepare('INSERT INTO tbdisciplina(disciplina) VALUES (?)');
    $stmt->execute([$disciplina]);

    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar disciplina</title>
</head>
<body>
    <h2>Adicionar disciplina</h2>   
    <form method = "POST">
        
        <label for= "disciplina">Nome da disciplina:</label>
        <input type="text" name="disciplina" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>