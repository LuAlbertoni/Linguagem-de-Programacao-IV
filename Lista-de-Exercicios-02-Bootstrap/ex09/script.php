<?php
require_once "../header.php";

$results = calcularIdade($_POST['ano']);

echo "<p>Você tem " . $results['idade'] . " anos e já viveu " . $results['dias'] . " dias. Em 2025 você terá " . $results['idade2025'] . " anos</p>";

require_once "../footer.php";
