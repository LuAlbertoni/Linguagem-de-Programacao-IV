<?php

function positivoNegativo($val)
{
    if ($val > 0) {
        return "Valor Positivo";
    } elseif ($val < 0) {
        return "Valor Negativo";
    } elseif ($val == 0) {
        return "Igual a Zero";
    } else {
        return "Valor inválido";
    }
}
