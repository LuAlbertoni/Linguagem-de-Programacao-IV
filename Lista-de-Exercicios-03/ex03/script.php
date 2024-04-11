<?php
$valores = [];

for ($i = 1; $i <= 10; $i++) {
    $valores[] = $_POST["valor$i"];
}

$numero = $_POST["numero"];

foreach ($valores as $key => $value) {
    $valores[$key] = $value * $numero;
}

echo "<p>Valores multiplicados: " . implode(", ", $valores) . "</p>";
