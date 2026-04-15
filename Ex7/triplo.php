<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST['num'];
    $numTriplo = $num * 3;
    echo "Triplo do número $num: $numTriplo";
}