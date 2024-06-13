<?php

// for ($i=1896; $i <=2024 ; $i+=4) { 
//     if ($i == 1904) {
//         $es = 1906;
//         echo"<br>Ano de Olimpíada: $i";
//         echo"<br>Ano de Olimpíada: $es";
//         echo" - No ano de $es foi realizada uma edição especial para comemoração de 10 anos dos jogos";
//         $i = 1908;
//     }
//     if ($i != 1916 && $i != 1940 && $i!= 1944) {
//         echo"<br>Ano de Olimpíada: $i";
//     }
// }

$i =1896;

while ($i <=2024){
    if ($i == 1904) {
        $es = 1906;
        echo"<br>Ano de Olimpíada: $i";
        echo"<br>Ano de Olimpíada: $es";
        echo" - No ano de $es foi realizada uma edição especial para comemoração de 10 anos dos jogos";
        $i = 1908;
    }
    if ($i != 1916 && $i != 1940 && $i!= 1944) {
        echo"<br>Ano de Olimpíada: $i";
        
    }
    $i+=4;
}
?>