<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $notaA = $_POST['notaA'];
    $notaB = $_POST['notaB'];
    $somaNotas = $notaA + $notaB;
    $media = $somaNotas / 2;

    echo "<strong>Média de notas:<strong> $media";
}