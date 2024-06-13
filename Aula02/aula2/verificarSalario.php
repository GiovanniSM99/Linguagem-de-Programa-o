<?php

    $salarioB = $_POST['txtSalario_bruto'];
    $descontos = $_POST['txtDescontos'];

    if($salarioB<=1320)
    {
        $DescInss = $salarioB * 0.075;
    }
    else if($salarioB<=2571.29)
    {
        $DescInss = $salarioB * 0.09;
    }
    else if($salarioB<=3856.94)
    {
        $DescInss = $salarioB * 0.12;
    }
    else if($salarioB<=7507.49)
    {
        $DescInss = $salarioB * 0.14;
    }
    else
    {
        $DescInss = 7507.49 * 0.14;
    }


    if($salarioB<=1903.98)
    {
        $DescIR=0;
    }
    else if($salarioB<=2826.65)
    {
        $DescIR = $salarioB * 0.075;
    }
    else if($salarioB<=3751.05)
    {
        $DescIR = $salarioB * 0.15;
    }
    else if($salarioB<=4664.68)
    {
        $DescIR = $salarioB * 0.225;
    }
    else
    {
        $DescIR = $salarioB * 0.275;
    }

    $totalDescontos = $DescInss+$DescIR+$descontos;

    $salarioLiquido = $salarioB - $totalDescontos;

    $salarioLiquido = round($salarioLiquido,2);


    echo "<br>O desconto de Inss é: $DescInss";
    echo "<br>O desconto de IR é: $DescIR";
    echo "<br>O salário líquido é: $salarioLiquido";
?>