<?php
$cores = ['red', 'green', 'blue', 'gray', 'orange'];
$cor_selecionada = isset($_POST['cor']) ? $_POST['cor'] : null;

?>
<a href="index.php"> Voltar </a><br>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolha uma Cor</title>
    <style>
        body {
            background-color: <?= $cor_selecionada ?>;
        }
    </style>
</head>
<body>
    <h1>Escolha uma Cor</h1>
    
    <form method="post">
        <label for="cor">Selecione uma cor:</label>
        <select id="cor" name="cor">
            <?php
           
            foreach ($cores as $cor) {
               
                $selected = ($cor_selecionada == $cor) ? 'selected' : '';
                echo "<option value=\"$cor\" $selected>$cor</option>";
            }
            ?>
        </select>
        <input type="submit" value="Alterar Cor do Fundo">
    </form>

    <?php
    if ($cor_selecionada) {
        echo "<p>Você selecionou a cor: $cor_selecionada</p>";
    }
    ?>
</body>
</html>
