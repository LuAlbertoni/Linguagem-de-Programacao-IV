<?php
require_once "../header.php";

$results = calcularQuantidadeETotal($_POST['metros']);

echo "<p>Serão necessárias " . $results['latas'] . " lata(s) de tinta, totalizando R$ " . $results['preco'] . "</p>";

require_once "../footer.php";
