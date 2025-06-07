<?php  
    $preco_base = $_GET['a'];
    $taxa_impostos = $_GET['b'];
    $valor_do_imposto = $preco_base * ($taxa_impostos / 100);
    $preco_final = $preco_base + $valor_do_imposto;

    echo "Preço base: R$ $preco_base <br>";
    echo "Taxa de impostos: $taxa_impostos% <br>";
    echo "Valor do imposto: R$ $valor_do_imposto <br>";
    echo "Preço final após impostos: R$ $preco_final";