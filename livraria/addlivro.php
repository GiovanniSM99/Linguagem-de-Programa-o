<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $nomeLivro = $_POST['nomeLivro'];
    $edicao = $_POST['edicao'];
    $codGenero = $_POST['codGenero'];
    $codAutor = $_POST['codAutor'];
    $codEditora = $_POST['codEditora'];


    $stmt = $pdo ->prepare('INSERT INTO tbLivro(nomeLivro , edicao, codGenero, codAutor, codEditora) VALUES (?,?,?,?,?)');
    $stmt ->execute([$nomeLivro , $edicao, $codGenero, $codAutor, $codEditora]);

    header ('location: index.php');
}
$codGeneros = $pdo->query('SELECT codGenero, genero FROM tbGenero')->fetchAll();
$codAutores= $pdo->query('SELECT codAutor, nomeAutor FROM tbAutor')->fetchAll();
$codEditoras= $pdo->query('SELECT codEditora, nomeEditora FROM tbEditora')->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro</title>
</head>
<body>
    <h2>Adicioncar Livro</title>
    <form method="POST">
    
        <label for="nomeLivro"> Nome do Livro:</label>
        <input type="text" name="nomeLivro" required><br>

        <label for="edicao">Edição:</label>
        <input type="text" name="edicao"><br>


                <label for="codGenero">Código do Gênero:</label><br>
        <select name="codGenero" required>
            <?php foreach ($codGeneros as $codGenero): ?>
                <option value="<?=$codGenero['codGenero'] ?>"><?=$codGenero['genero'] ?></option>
            <?php endforeach; ?> 
        </select><br>   
        
                <label for="codAutor">Código do Autor:</label>

        <select name="codAutor" required>
            <?php foreach ($codAutores as $codAutor): ?>
                <option value="<?=$codAutor['codAutor'] ?>"><?=$codAutor['nomeAutor'] ?></option>
            <?php endforeach; ?>
        </select><br>

            <label for="codEditora">Código da Editora:</label>

        <select name="codEditora" required>
            <?php foreach ($codEditoras as $codEditora): ?>
                <option value="<?=$codEditora['codEditora'] ?>"><?=$codEditora['nomeEditora'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Adicionar">
    </form>
</body>
</html>