<?php
$ano = $_POST['ano'];
$anoAtual = date('Y');
$idade = $anoAtual - $ano;
$dias = $idade * 365;
$idade2025 = 2025 - $ano;

echo "Você tem $idade anos e já viveu $dias dias. Em 2025 você terá $idade2025 anos.";
