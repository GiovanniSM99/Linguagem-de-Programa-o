<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $nomeAnimal = $_POST['nomeAnimal'];
    $fotoAnimal = $_POST['fotoAnimal'];
    $codTipoAnimal = $_POST['codTipoAnimal'];
    $codcliente = $_POST['codcliente'];


    $stmt = $pdo ->prepare('INSERT INTO tbAnimal(nomeAnimal , fotoAnimal, codTipoAnimal, codcliente) VALUES (?,?,?,?)');
    $stmt ->execute([$nomeAnimal , $fotoAnimal, $codTipoAnimal, $codcliente]);

    header ('location: index.php');
}
$codTipoAnimais = $pdo->query('SELECT codTipoAnimal, tipoAnimal FROM tbtipoanimal')->fetchAll();
$codclientes= $pdo->query('SELECT codcliente, nomecliente FROM tbcliente')->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Animal</title>
</head>
<body>
    <h2>Adicioncar Animal</title>
    <form method="POST">
    
        <label for="nomeAnimal"> Nome do Animal:</label>
        <input type="text" name="nomeAnimal" required><br>

        <label for="fotoAnimal">Foto do Animal:</label>
        <input type="text" name="fotoAnimal" required><br>

        <label for="codTipoAnimal">Código do Tipo de Animal:</label>

        <select name="codTipoAnimal" required>
            <?php foreach ($codTipoAnimais as $codTipoAnimal): ?>
                <option value="<?=$codTipoAnimal['codTipoAnimal'] ?>"><?=$codTipoAnimal['tipoAnimal'] ?></option>
            <?php endforeach; ?>
        </select><br>

                <label for="codcliente">Código do Cliente:</label>

        <select name="codcliente" required>
            <?php foreach ($codclientes as $codcliente): ?>
                <option value="<?=$codcliente['codcliente'] ?>"><?=$codcliente['nomecliente'] ?></option>
            <?php endforeach; ?>
        </select><br>



        <input type="submit" value="Adicionar">
    </form>
</body>
</html>