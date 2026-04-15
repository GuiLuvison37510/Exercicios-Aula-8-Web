<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST ['num'];
    $resul = $num * $num;

    echo "O quadrado do número digitado é $resul";

}
?>