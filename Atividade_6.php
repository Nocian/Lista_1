<?php

    $valor_original = $_GET['a'];
    $percentual_desconto = $_GET['b'];
    $valor_do_desconto = $valor_original * ($percentual_desconto / 100);
    $valor_final = $valor_original - $valor_do_desconto;

    
echo "Valor original: R$ $valor_original <br>";
echo "Percentual de desconto: $percentual_desconto% <br>"; 
echo "Valor do desconto: R$ $valor_do_desconto <br>";
echo "Valor final após desconto: R$ $valor_final";