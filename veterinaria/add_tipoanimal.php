<?php
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tipoAnimal = $_POST['tipoAnimal'];

    $stmt = $pdo->prepare('INSERT INTO tbtipoanimal (tipoAnimal) VALUES (?)');
    $stmt->execute([$tipoAnimal]);
    
    header ('location: index.php');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tipo de Animal</title>
</head>
<body>
    <h2>Adicionar Tipo de Animal</h2>   
    <form method = "POST">
        
        <label for= "$tipoAnimal">Tipo de Animal:</label>
        <input type="text" name="tipoAnimal" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>