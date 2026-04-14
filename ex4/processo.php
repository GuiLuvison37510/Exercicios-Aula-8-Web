<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $real = $_POST ['real'];
    $dolar = $real / 4.98;
    
    echo "$dolar Dólares";
}
?>