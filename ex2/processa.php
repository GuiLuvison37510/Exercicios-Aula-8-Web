<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST ['num'];
    if ($num % 2 == 0) {
        echo "O número é Par";
    } 
        else {
            echo "O número é Ímpar";
        }
}
?>