<?php
$alunos = [];
$media = 0;
$maiorNota = 0;
$nomeMaiorNota = '';

for ($i = 1; $i <= 10; $i++) {
    $nome = $_POST["nome$i"];
    $nota = $_POST["nota$i"];
    $alunos[$nome] = $nota;
    $media += $nota;
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $nomeMaiorNota = $nome;
    }
}

$media /= 10;

echo "<p>Média da classe: $media</p>";
echo "<p>Aluno com maior nota: $nomeMaiorNota</p>";
