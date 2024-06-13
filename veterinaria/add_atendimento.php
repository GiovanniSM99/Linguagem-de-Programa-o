<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $DataAtendimento = $_POST['DataAtendimento'];
    $HoraAtendimento = $_POST['HoraAtendimento'];
    $codAnimal = $_POST['codAnimal'];
    $codVet = $_POST['codVet'];


    $stmt = $pdo ->prepare('INSERT INTO tbatendimento(DataAtendimento , HoraAtendimento, codAnimal, codVet) VALUES (?,?,?,?)');
    $stmt ->execute([$DataAtendimento , $HoraAtendimento, $codAnimal, $codVet]);

    header ('location: index.php');
}
$codAnimais = $pdo->query('SELECT codAnimal, nomeAnimal FROM tbanimal')->fetchAll();
$codVets= $pdo->query('SELECT codVet, nomeVet FROM tbveterinario')->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Atendimento</title>
</head>
<body>
    <h2>Adicioncar Atendimento</title>
    <form method="POST">
    
        <label for="DataAtendimento"> Data do Atendimento (ano/mês/dia):</label>
        <input type="text" name="DataAtendimento" required><br>

        <label for="HoraAtendimento">Hora do Atendimento:</label>
        <input type="text" name="HoraAtendimento" required><br>

        <label for="codAnimal">Código do Animal:</label>

        <select name="codAnimal" required>
            <?php foreach ($codAnimais as $codAnimal): ?>
                <option value="<?=$codAnimal['codAnimal'] ?>"><?=$codAnimal['nomeAnimal'] ?></option>
            <?php endforeach; ?>
        </select><br>

                <label for="codcliente">Código do Veterinário:</label>

        <select name="codVet" required>
            <?php foreach ($codVets as $codVet): ?>
                <option value="<?=$codVet['codVet'] ?>"><?=$codVet['nomeVet'] ?></option>
            <?php endforeach; ?>
        </select><br>



        <input type="submit" value="Adicionar">
    </form>
</body>
</html>

