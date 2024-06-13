<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Alunos</title>
</head>
<body>
    <h1>CRUD de Alunos </h1>
    <br>
    <a href="cadastro.php">Adicionar Alunos</a><br><br>
    <table>
        <tr>
            <th>RA</th>
            <th>Nome do Aluno</th>
            <th>Telefone do aluno</th>
            <th>Celular do aluno</th>
            <th>Idade do aluno</th>
            <th>Ações</th>
    </tr>
<?php
include('conn.php');
$stmt = $pdo ->query('SELECT * FROM tbaluno');
while ($row = $stmt ->fetch()) {
    echo "<tr>";
    echo "<td>{$row['ra']}</td>";
    echo "<td>{$row['nomeAluno']}</td>";
    echo "<td>{$row['telAluno']}</td>";
    echo "<td>{$row['celAluno']}</td>";
    echo "<td>{$row['idadeAluno']}</td>";
    echo "<td>
                <a href='editar.php?id={$row['ra']}'>Editar</a>
                <a href='excluir.php?id={$row['ra']}'>Excluir</a>
        </td>";
        echo "</tr>";
}
?>
</body>
</html>