<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST ['ano'];
    $resul = 2026 - $ano;
    if ($resul >= 18) {
      echo "Você é maior de idade.";
    } else {
      echo "Você é menor de idade.";
    }
    echo "<br>Sua idade é: $resul";
}
?>