<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $ra = $_POST['ra'];
    $nomeAluno = $_POST['nomeAluno'];
    $telAluno = $_POST['telAluno'];
    $celAluno = $_POST['celAluno'];
    $idadeAluno = $_POST['idadeAluno'];

    $stmt = $pdo ->prepare('INSERT INTO tbaluno(ra, nomeAluno, telAluno, celAluno, idadeAluno) VALUES (?,?,?,?,?)');
    $stmt ->execute([$ra,$nomeAluno, $telAluno, $celAluno,$idadeAluno]);

    header('Location: index.php');
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
    <h2>Adicioncar Aluno</title>
    <form method="POST">
        <label for="ra">RA do Aluno:</label>
        <input type="text" name="ra" required><br>    

        <label for="nomeAluno"> Nome do Aluno:</label>
        <input type="text" name="nomeAluno" required><br>

        <label for="telAluno">Telefone do Aluno:</label>
        <input type="text" name="telAluno" required><br>

        <label for="celAluno">Celular do Aluno:</label>
        <input type="text" name="celAluno" required><br>

        <label for="idadeAluno">Idade do Aluno:</label>
        <input type="text" name="idadeAluno" required><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>