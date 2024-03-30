<?php
$metros = $_POST['metros'];
$litros = $metros / 3;
$latas = ceil($litros / 18);
$preco = $latas * 80;

echo "Serão necessárias $latas lata(s) de tinta, totalizando R$ $preco";
