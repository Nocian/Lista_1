<?php

    $salario_base  = $_GET['a'];
    $percentual_aumento  = $_GET['b'];
    $valor_aumento = $salario_base * ($percentual_aumento / 100);
    $novo_salario  = $salario_base + $valor_aumento;

    
echo "Salário base: R$ $salario_base <br>";
echo "Percentual de aumento: $percentual_aumento% <br>";
echo "Valor do aumento: R$ $valor_aumento <br>";
echo "Novo salário após aumento: R$ $novo_salario";
