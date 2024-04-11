<?php
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

for ($i = 1; $i <= 10; $i++) {
    $numero = $_POST["numero$i"];
    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "<p>Quantidade de números negativos: $negativos</p>";
echo "<p>Quantidade de números positivos: $positivos</p>";
echo "<p>Quantidade de números pares: $pares</p>";
echo "<p>Quantidade de números ímpares: $impares</p>";
