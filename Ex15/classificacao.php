<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST['num'];
    if ($num < 0 ) {
        echo "O número $num é negativo.";
    } else if ($num == 0) {
        echo "O número $num é igual a zero.";
    } else {
        echo "O número é positivo.";
    }
}