<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $metros = $_POST['metros'];
    $centimetros = $metros * 100;
    echo "$metros metros convertidos em centímetros: $centimetros";
}