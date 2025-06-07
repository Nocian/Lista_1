<?php
    $preco_produto1 = $_GET['a'];
    $quantidade_produto1 = $_GET['b'];
    $preco_produto2 = $_GET['c'];
    $quantidade_produto2 = $_GET['d'];

    $valor_total_carrinho  = ($preco_produto1 * $quantidade_produto1) + ($preco_produto2 * $quantidade_produto2);
    echo "O valor total do carrinho é R$ $valor_total_carrinho";