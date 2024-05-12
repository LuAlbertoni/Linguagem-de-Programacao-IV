<?php
require_once "../header.php";

$fat = calcularFatorial($_POST['num']);

echo "<p>O fatorial de " . $_POST['num'] . " é " . $fat . "</p>";

require_once "../footer.php";
