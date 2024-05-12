<?php
require_once "../header.php";

$imc = calcularIMC($_POST['peso'], $_POST['altura']);
$classificacao = classificarIMC($imc);

echo "<p>Seu IMC é " . $imc . "</p>";
echo "<p>De acordo com o IMC, para um adulto, o seu peso é considerado: " . $classificacao . "</p>";
echo "<p><a href='http://tabnet.datasus.gov.br/cgi-win/SISVAN/CNV/notas_sisvan.html#:~:text=Valores%20de%20IMC%20abaixo%20de,%2C0%3A%20adulto%20com%20obesidade' target='_blank'>Saiba mais sobre o IMC</p>";

require_once "../footer.php";
