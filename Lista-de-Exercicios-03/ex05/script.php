<?php
$primos = [];
for ($i = 1; $i <= 20; $i++) {
    if (isPrimo($_POST["numero$i"])) {
        $primos[] = $_POST["numero$i"];
    }
}

echo "Números primos: " . implode(", ", $primos);

function isPrimo($numero)
{
    if ($numero == 1) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}
