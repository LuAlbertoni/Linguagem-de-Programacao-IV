<?php
$meses = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];

$numero = $_POST["numero"];
$mes = $meses[$numero - 1];
echo "<p>O mês correspondente ao número $numero é $mes.</p>";
