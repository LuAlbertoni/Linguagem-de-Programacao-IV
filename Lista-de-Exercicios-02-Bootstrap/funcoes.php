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

function gerarTabuada($num)
{
    $tabuada = array();

    for ($i = 0; $i <= 10; $i++) {
        $tabuada[] = "$num x $i = " . $num * $i;
    }

    return $tabuada;
}

function calcularFatorial($num)
{
    $fat = 1;

    for ($i = $num; $i > 0; $i--) {
        $fat *= $i;
    }

    return $fat;
}

function compararNumeros($a, $b)
{
    if ($a == $b) {
        return "Números iguais: $a";
    } else {
        if ($a < $b) {
            return "$a $b";
        } else {
            return "$b $a";
        }
    }
}

function converterMetrosParaCentimetros($metros)
{
    $centimetros = $metros * 100;
    return $centimetros;
}

function calcularQuantidadeETotal($metros)
{
    $litros = $metros / 3;
    $latas = ceil($litros / 18);
    $preco = $latas * 80;

    return array('latas' => $latas, 'preco' => $preco);
}

function calcularIdade($ano)
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $ano;
    $dias = $idade * 365;
    $idade2025 = 2025 - $ano;

    return array('idade' => $idade, 'dias' => $dias, 'idade2025' => $idade2025);
}

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura ** 2);
    return $imc;
}

function classificarIMC($imc)
{
    if ($imc < 18.5) {
        return "baixo peso";
    } elseif ($imc < 25) {
        return "adequado (eutrófico)";
    } elseif ($imc < 30) {
        return "sobrepeso";
    } else {
        return "obesidade";
    }
}
