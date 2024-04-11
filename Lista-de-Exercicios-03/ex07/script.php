<?php
$alunos = [];
for ($i = 1; $i <= 10; $i++) {
    $nome = $_POST["nome$i"];
    $nota1 = $_POST["nota1$i"];
    $nota2 = $_POST["nota2$i"];
    $media = ($nota1 + $nota2) / 2;
    $alunos[$nome] = ["nota1" => $nota1, "nota2" => $nota2, "media" => $media];
}

echo "<h1>Aprovados</h1>";
foreach ($alunos as $nome => $dados) {
    if ($dados["media"] >= 6) {
        echo "$nome: {$dados['media']}<br>";
    }
}

echo "<h1>Reprovados</h1>";
foreach ($alunos as $nome => $dados) {
    if ($dados["media"] < 6) {
        echo "$nome<br>";
    }
}
