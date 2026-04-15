<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST ['num'];
    $resul = $num * 1.15;

    echo "O valor digitado + 15% é: $resul";
}
?>