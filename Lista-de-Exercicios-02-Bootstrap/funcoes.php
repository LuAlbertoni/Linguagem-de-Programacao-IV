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

function encontrarMenor($valores)
{
    $menor = $valores[0];
    $posicao = 0;

    foreach ($valores as $chave => $valor) {
        if ($valor < $menor) {
            $menor = $valor;
            $posicao = $chave + 1;
        }
    }

    return array('val' => $menor, 'pos' => $posicao);
}

function calcularSoma($val1, $val2)
{
    if ($val1 == $val2) {
        return ($val1 + $val2) * 3;
    } else {
        return $val1 + $val2;
    }
}