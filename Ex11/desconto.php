<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $vlOriginal = $_POST['vlOriginal'];
    $vlDesconto = $vlOriginal * 0.10;
    $vlFinal = $vlOriginal - $vlDesconto;
    echo "Valor Original: R$$vlOriginal<br>";
    echo "Desconto: R$$vlDesconto<br>";
    echo "Valor Final com Desconto: R$$vlFinal";
}