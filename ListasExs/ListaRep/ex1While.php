<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>

</head>
<body>
        <h1>Exercício 1</h1>
        <form action="" method="POST">
            <label for="">1º número:</label>
            <input type="number" name="txtn1"><br>

            <label for="">2º número:</label>
            <input type="number" name="txtn2"><br>

            <input type="submit" class="btn" value="CALCULAR">
        </form>
        <a href="index.php">voltar</a><br>
        <?php
            $numero1 = $_POST['txtn1'];
            $numero2 = $_POST['txtn2'];
            $soma = 0;  
            $qtde = 0;
            $media = 0;

            if($numero1 <= '0'){
                echo'<br><br>O PARÂMETRO NÃO PODE SER IGUAL OU MENOR QUE 0. DIGITE NOVAMENTE';
            }elseif($numero2 < $numero1){
                echo '<br><br>O primeiro parâmetro tem que ser menor que o segundo parâmetro. Digite novamente.';
            } elseif ($numero2 > $numero1) {
                echo "<br>NÚMEROS<br>";
                $i = $numero1;
                while ($i <= $numero2) {
                    echo "$i <br>";
                    $soma += $i;
                    $qtde += 1;
                    $i ++;
                }

                if($qtde > 15) {
                    echo "<br>EXCESSO DE PARÂMETROS<br><br>";
                }else{
                    echo "DENTRO DOS PARÂMETROS<br><br>";
                }

                $media = $soma / $qtde;

                echo "NÚMEROS GERADOS: $qtde<br>";
                echo "SOMA DOS VALORES: $soma<br>";
                echo "MÉDIA DOS VALORES: $media<br>";
            }
        
        ?>
</body>
</html>