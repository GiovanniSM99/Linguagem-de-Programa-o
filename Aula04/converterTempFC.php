<?php

    $temp = $_POST['txtTemp'];

    $conv = round (($temp-32)/1.8, 2);

    echo"<br>A temperatura em Celsius é: $conv C°";

?>