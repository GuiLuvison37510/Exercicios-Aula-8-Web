<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $areaR = $base * $altura;
    echo "Área do Retângulo: $areaR";
}