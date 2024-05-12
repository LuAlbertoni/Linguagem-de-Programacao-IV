<?php
require_once "../header.php";

$num1 = $_POST['val1'];
$num2 = $_POST['val2'];

if ($num1 == $num2) {
    echo "<p>O triplo da soma é " . calcularSoma($num1, $num2) . "</p>";
} else {
    echo "<p>A soma dos valores é " . calcularSoma($num1, $num2) . "</p>";
}

require_once "../footer.php";
