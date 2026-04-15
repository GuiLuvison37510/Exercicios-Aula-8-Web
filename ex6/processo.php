<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST ['nome'];
    $preco = $_POST ['preco'];

    echo "$nome custa $preco";
}
?>