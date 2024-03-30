<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura ** 2);

echo "Seu IMC é $imc.";

echo "<br>De acordo com o IMC, para um adulto, o seu peso é considerado: ";
if ($imc < 18.5) {
    echo "baixo peso.";
} elseif ($imc < 25) {
    echo "adequado (eutrófico).";
} elseif ($imc < 30) {
    echo "sobrepeso.";
} else {
    echo "obesidade.";
}

echo "<br><a href='http://tabnet.datasus.gov.br/cgi-win/SISVAN/CNV/notas_sisvan.html#:~:text=Valores%20de%20IMC%20abaixo%20de,%2C0%3A%20adulto%20com%20obesidade' target='_blank'>Saiba mais sobre o IMC</a>";
