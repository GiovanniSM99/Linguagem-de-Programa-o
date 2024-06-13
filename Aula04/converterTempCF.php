<?php

    $temp = $_POST['txtTemp'];

    $conv = round(($temp*1.8)+32, 2);

    echo"<br>A temperatura em Fahrenheit é: $conv F°";


?>
