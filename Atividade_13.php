<?php
    $temperatura_celsius = $_GET['a'];
    $temperatura_fahrenheit = ($temperatura_celsius * 9/5) + 32;
    echo "A temperatura de $temperatura_celsius °C é igual a $temperatura_fahrenheit °F";