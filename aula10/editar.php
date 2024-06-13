<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id = $_POST['id'];

    $nomeAluno = $_POST['nomeAluno'];
    $telAluno = $_POST['telAluno'];
    $celAluno = $_POST['celAluno'];
    $idadeAluno = $_POST['idadeAluno'];
    $stmt = $pdo->prepare('UPDATE tbaluno SET nomeAluno = ?, telAluno =?, celAluno= ?, idadeAluno= ? WHERE ra =?');
    $stmt->execute([$nomeAluno, $telAluno, $celAluno,$idadeAluno, $id]);

    header('Location: index.php');
}

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM tbaluno WHERE ra =?');
$stmt->execute([$id]);
$aluno = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
</head>
<body>
    <h2>Editar Aluno</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $aluno['ra'];?>">
        <label for ="nomeAluno">Nome do Aluno:</label>
        <input type="text" name="nomeAluno" value="<?php echo $aluno['nomeAluno'];?>"required><br>
       
        <label for ="telAluno">Telefone do Aluno:</label>
        <input type="text" name="telAluno" value="<?php echo $aluno['telAluno'];?>"required><br>

        <label for ="celAluno">Celular do Aluno:</label>
        <input type="text" name="celAluno" value="<?php echo $aluno['celAluno'];?>"required><br>

        <label for ="idadeAluno">Idade do Aluno:</label>
        <input type="text" name="idadeAluno" value="<?php echo $aluno['idadeAluno'];?>"required><br>


        <input type="submit" value="Editar">
    </form>
</body>
</html>