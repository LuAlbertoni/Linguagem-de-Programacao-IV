<?php
$inferior50 = 0;
$entre50e100 = [];
$superior100 = 0;
$media = 0;

for ($i = 1; $i <= 5; $i++) {
    $preco = $_POST["preco$i"];
    if ($preco < 50) {
        $inferior50++;
    } elseif ($preco >= 50 && $preco <= 100) {
        $entre50e100[] = $_POST["produto$i"];
    } else {
        $media += $preco;
        $superior100++;
    }
}

echo "<p>Quantidade de produtos com preço inferior a R$50,00: $inferior50</p>";
echo "<p>Produtos com preço entre R$50,00 e R$100,00: " . implode(", ", $entre50e100) . "</p>";
echo "<p>Média dos preços dos produtos com preço superior a R$100,00: R$" . number_format($media, 2, ",", ".") . "</p>";
