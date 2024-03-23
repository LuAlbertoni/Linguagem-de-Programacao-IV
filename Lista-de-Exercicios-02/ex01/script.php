<?php
$val = $_POST['val'];

if ($val > 0) {
    echo "Valor Positivo";
} elseif ($val < 0) {
    echo "Valor Negativo";
} elseif ($val == 0) {
    echo "Igual a Zero";
} else {
    echo "Valor inválido";
}
