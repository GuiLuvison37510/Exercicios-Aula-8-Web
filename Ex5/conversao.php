<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $celsius = $_POST['celsius'];
    $fahrenheit = $celsius * 1.8 + 32;
    echo "Temperatura em Celsius: $celsius<br>";
    echo "Temperatura em Fahrenheit: $fahrenheit";
}