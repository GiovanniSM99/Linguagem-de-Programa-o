<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $RAAluno = $_POST['RAAluno'];
    $codProfessor = $_POST['codProfessor'];
    $codDisciplina = $_POST['codDisciplina'];
    $nota = $_POST['nota'];
    $faltas = $_POST['faltas'];


    $stmt = $pdo ->prepare('INSERT INTO tbNota(RAAluno , codProfessor, codDisciplina, nota, faltas) VALUES (?,?,?,?,?)');
    $stmt ->execute([$RAAluno , $codProfessor, $codDisciplina, $nota, $faltas]);

    header ('location: index.php');
}
$RAAlunos = $pdo->query('SELECT RAAluno, nomeAluno FROM tbAluno')->fetchAll();
$codProfessores= $pdo->query('SELECT codProfessor, nomeProfessor FROM tbProfessor')->fetchAll();
$codDisciplinas= $pdo->query('SELECT codDisciplina, disciplina FROM tbDisciplina')->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Nota</title>
</head>
<body>
    <h2>Adicioncar Nota</title>
    <form method="POST">

                <label for="RAAluno">RA do Aluno:</label><br>
        <select name="RAAluno" required>
            <?php foreach ($RAAlunos as $RAAluno): ?>
                <option value="<?=$RAAluno['RAAluno'] ?>"><?=$RAAluno['nomeAluno'] ?></option>
            <?php endforeach; ?> 
        </select><br>   
        
                <label for="codProfessor">Código do Professor:</label>

        <select name="codProfessor" required>
            <?php foreach ($codProfessores as $codProfessor): ?>
                <option value="<?=$codProfessor['codProfessor'] ?>"><?=$codProfessor['nomeProfessor'] ?></option>
            <?php endforeach; ?>
        </select><br>

            <label for="codEditora">Código da Disciplina:</label>

        <select name="codDisciplina" required>
            <?php foreach ($codDisciplinas as $codDisciplina): ?>
                <option value="<?=$codDisciplina['codDisciplina'] ?>"><?=$codDisciplina['disciplina'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="nota"> Nota:</label>
        <input type="text" name="nota" required><br>

        <label for="faltas">Faltas:</label>
        <input type="text" name="faltas"><br>



        <input type="submit" value="Adicionar">
    </form>
</body>
</html>