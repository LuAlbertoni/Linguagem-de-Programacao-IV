<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>

<body>
    <form action="script.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='valor$i'>Valor $i:</label>";
            echo "<input type='number' name='valor$i' id='valor$i' required>";
            echo "<br>";
        }
        ?>

        <label for="numero">Número para multiplicar:</label>
        <input type="number" name="numero" id="numero" required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>