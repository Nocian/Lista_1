<?php
    $altura = $_GET['a'];    
    $peso = $_GET['b'];
    $imc = $peso / ($altura * $altura);
    $imc_formatado = number_format($imc,2,",",".");


    echo "O IMC é igual a $imc_formatado";
