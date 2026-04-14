<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero = $_POST['numero'];
    for ($cont = 1; $cont < 11; $cont++){
        $resul = $numero * $cont;
        echo "$numero x $cont = $resul<br>";        
    }
}