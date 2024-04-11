<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>

<body>
    <form action="script.php" method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='produto$i'>Produto $i:</label>";
            echo "<input type='text' name='produto$i' id='produto$i' required>";
            echo "<label for='preco$i'>Preço $i:</label>";
            echo "<input type='number' name='preco$i' id='preco$i' required>";
            echo "<br>";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>