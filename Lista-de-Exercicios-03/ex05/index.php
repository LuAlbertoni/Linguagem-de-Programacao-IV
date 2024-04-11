<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>

<body>
    <form action="script.php" method="post">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' name='numero$i' id='numero$i' required>";
            echo "<br>";
        }
        ?>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>