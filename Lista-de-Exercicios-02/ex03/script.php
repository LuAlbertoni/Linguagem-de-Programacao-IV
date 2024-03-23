<?php
$num1 = $_POST['val1'];
$num2 = $_POST['val2'];

if ($num1 == $num2) {
    echo "O triplo da soma é " . ($num1 + $num2) * 3;
} else {
    echo "A soma dos valores é " . ($num1 + $num2);
}
