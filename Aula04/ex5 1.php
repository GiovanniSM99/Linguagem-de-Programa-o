<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "post">

    <input type="radio" value="fr" name="rdCidades">Franco da Rocha<br>
    <input type="radio" value="fm" name="rdCidades">Francisco Morato<br>
    <input type="radio" value="ca" name="rdCidades">Caieiras<br>
    <input type="radio" value="ma" name="rdCidades">Mairiporã<br>
    <br>
    <input type="radio" value="sp"name="rdEstados">SP<br>
    <input type="radio" value="mg"name="rdEstados">MG<br>

    <br>

    <select name="slCidades">
        <option>Escolha uma cidade</option>
        <option value="fr">Franco da Rocha</option>
        <option value="fm">Francisco Morato</option>
        <option value="ca">Caieiras</option>
        <option value="ma">Mairiporã</option>

    </select>

    <br><br>
    
    <select name="slEstados">
        <option>Escolha um Estado</option>
        <option value="sp">SP</option>
        <option value="mg">MG</option>
      

    </select>
    <br><br>
    <input type="submit">

</form>

    <?php

    $cidadeRd = $_POST['rdCidades'];
    $estadoRd = $_POST['rdEstados'];
    $cidadeSl = $_POST['slCidades'];
    $estadoSl = $_POST['slEstados'];

    if($cidadeRd=="fr"){
        echo"<br>Você escolheu Franco da Rocha<br>";
    }
    elseif($cidadeRd=="fm"){
        echo"<br>Você escolheu Francisco Morato<br>";
    }
    elseif($cidadeRd=="ca"){
        echo"<br>Você escolheu Caieiras<br>";
    }
    elseif($cidadeRd=="ma"){
        echo"<br>Você escolheu Mairiporã<br>";
    }
    else{
        echo"<br>Você não escolheu uma cidade <br>";
    }
    //
    //
    if($estadoRd=="sp"){
        echo"<br>Você escolheu SP<br>";
    }
    elseif($estadoRd=="mg"){
        echo"<br>Você escolheu MG<br>";
    }
    else{
        echo"<br>Você não escolheu um estado<br>";
    }
    //
    //
    if($cidadeSl=="fr"){
        echo"<br>Você escolheu Franco da Rocha<br>";
    }
    elseif($cidadeSl=="fm"){
        echo"<br>Você escolheu Francisco Morato<br>";
    }
    elseif($cidadeSl=="ca"){
        echo"<br>Você escolheu Caieiras<br>";
    }
    elseif($cidadeSl=="ma"){
        echo"<br>Você escolheu Mairiporã<br>";
    }
    else{
        echo"<br>Você não escolheu uma cidade <br>";
    }
    //
    //
    if($estadoSl=="sp"){
        echo"<br>Você escolheu SP<br>";
    }
    elseif($estadoSl=="mg"){
        echo"<br>Você escolheu MG<br>";
    }
    else{
        echo"<br>Você não escolheu um estado<br>";
    }
    //
    //
    if($cidadeRd=="fr" && $estadoRd=="sp"){
        echo"<br>Você escolheu Franco da Rocha e SP<br>";
    }
    elseif($cidadeRd=="fr" && $estadoRd=="mg"){
        echo"<br>Você escolheu Franco da Rocha e MG<br>";
    }
    elseif($cidadeRd=="fr" && $estadoRd==""){
        echo"<br>Você escolheu Franco da Rocha e não escolheu um estado<br>";
    }
    elseif($cidadeRd=="fm" && $estadoRd=="sp"){
        echo"<br>Você escolheu Francisco Morato e SP<br>";
    }
    elseif($cidadeRd=="fm" && $estadoRd=="mg"){
        echo"<br>Você escolheu Francisco Morato e MG<br>";
    }
    elseif($cidadeRd=="fm" && $estadoRd=="sp"){
        echo"<br>Você escolheu Francisco Morato e SP<br>";
    }
    elseif($cidadeRd=="fm" && $estadoRd==""){
        echo"<br>Você escolheu Francisco Morato e não escolheu um estado<br>";
    }
    elseif($cidadeRd=="fm" && $estadoRd=="sp"){
        echo"<br>Você escolheu Francisco Morato e SP<br>";
    }
    elseif($cidadeRd=="ca" && $estadoRd=="sp"){
        echo"<br>Você escolheu Caieiras e SP<br>";
    }
    elseif($cidadeRd=="ca" && $estadoRd=="mg"){
        echo"<br>Você escolheu Caieiras e MG<br>";
    }
    elseif($cidadeRd=="ca" && $estadoRd==""){
        echo"<br>Você escolheu Caieiras e não escolheu um estado<br>";
    }
    elseif($cidadeRd=="ma" && $estadoRd=="sp"){
        echo"<br>Você escolheu Mairiporã e SP<br>";
    }
    elseif($cidadeRd=="ma" && $estadoRd=="mg"){
        echo"<br>Você escolheu Mairiporã e MG<br>";
    }
    elseif($cidadeRd=="ma" && $estadoRd=="sp"){
        echo"<br>Você escolheu Mairiporã e SP<br>";
    }
    elseif($cidadeRd=="ma" && $estadoRd==""){
        echo"<br>Você escolheu Mairiporã e não escolheu um estado<br>";
    }
    elseif($cidadeRd=="" && $estadoRd=="sp"){
        echo"<br>Você não escolheu uma cidade e escolheu SP<br>";
    }
    else{
        echo"<br>Você não escolheu uma cidade e escolheu MG<br>";
    }
    ?>

    <br>
    <a href="index.php">Voltar</a>


</body>
</html>