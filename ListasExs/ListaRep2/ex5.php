<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Radio Buttons</title>
</head>
<body>
    <form method="post">
        <label for="quantidade">Digite a quantidade de Radio Buttons que deseja:</label><br>
        <input type="number" name="quantidade" id="quantidade" min="1" required><br>
        <button type="submit">Gerar</button>

        <br><br>Você solicitou Radio Buttons:
        
            <?php
            
             if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["quantidade"])) {
                $quantidade = $_POST["quantidade"];
                
                echo "$quantidade<br>" ;

            for ($i = 1; $i <= $quantidade; $i++) {
                echo "<input type='radio' name='radio_$i' id='radio_$i'>";
                echo "<label for='radio_$i'>$i</label><br>";
            }
            }
            ?>
        </form>
    

</body>
</html>