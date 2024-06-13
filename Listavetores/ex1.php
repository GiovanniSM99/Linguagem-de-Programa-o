<?php

$valores = [];
for ($i = 0; $i < 20; $i++) {
    $valores[] = rand(100, 200);
}

echo "Valores gerados: " . implode(", ", $valores) . "<br>";

echo "Maior valor: " . max($valores) . "<br>";
echo "Menor valor: " . min($valores) . "<br>";

sort($valores);
echo "Valores em ordem crescente: " . implode(", ", $valores) . "<br>";

echo "Média dos valores: " . array_sum($valores) / count($valores) . "<br>";
echo "Soma dos valores: " . array_sum($valores) . "<br>";

?>