<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
    $conta = $_POST ['conta'];
    $npessoa = $_POST ['npessoa'];
    $resul = $conta / $npessoa;

    echo "Cada um deverá pagar: $resul reais";

?>