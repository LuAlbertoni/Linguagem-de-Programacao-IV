<?php
$num1 = $_POST['val1'];
$num2 = $_POST['val2'];
$num3 = $_POST['val3'];
$num4 = $_POST['val4'];
$num5 = $_POST['val5'];
$num6 = $_POST['val6'];
$num7 = $_POST['val7'];

$menor = $num1;
$posicao = 1;

if ($num2 < $menor) {
    $menor = $num2;
    $posicao = 2;
}
if ($num3 < $menor) {
    $menor = $num3;
    $posicao = 3;
}
if ($num4 < $menor) {
    $menor = $num4;
    $posicao = 4;
}
if ($num5 < $menor) {
    $menor = $num5;
    $posicao = 5;
}
if ($num6 < $menor) {
    $menor = $num6;
    $posicao = 6;
}
if ($num7 < $menor) {
    $menor = $num7;
    $posicao = 7;
}

echo "O menor valor é $menor e está na posição $posicao.";
