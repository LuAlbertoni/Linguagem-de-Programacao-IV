<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>
    <form action="script.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='nome$i'>Nome do aluno $i:</label>";
            echo "<input type='text' name='nome$i' id='nome$i' required>";
            echo "<label for='nota1$i'>Nota 1 do aluno $i:</label>";
            echo "<input type='number' name='nota1$i' id='nota1$i' required>";
            echo "<label for='nota2$i'>Nota 2 do aluno $i:</label>";
            echo "<input type='number' name='nota2$i' id='nota2$i' required>";
            echo "<br>";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>