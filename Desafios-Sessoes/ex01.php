<!-- Durante uma corrida de automóveis com N voltas de duração foram anotados para um piloto, na ordem, os tempos registrados em cada volta. Faça um programa em PHP para ler os tempos das N voltas, calcular e imprimir: melhor tempo, a volta em que o melhor tempo ocorreu e o tempo médio das N voltas. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>

<body>
    <form method="POST" action="ex01.php">
        <?php
        // Número de voltas
        if (!isset($_POST['num_voltas'])) {
            echo "<label for='num_voltas'>Número de voltas:</label>";
            echo "<input type='number' name='num_voltas' id='num_voltas' required><br>";
        }

        // Tempos das voltas
        if (isset($_POST['num_voltas'])) {
            $numVoltas = $_POST['num_voltas'];

            for ($i = 1; $i <= $numVoltas; $i++) {
                echo "<label for='volta_$i'>Tempo da volta $i:</label>";
                echo "<input type='number' name='volta_$i' id='volta_$i' required><br>";
            }
        }
        ?>

        <input type="submit" value="Calcular">
    </form>

    <?php
    session_start();

    // Se não houver sessão, cria
    if (!isset($_SESSION['num_voltas'])) {
        $_SESSION['num_voltas'] = 0;
        $_SESSION['melhor_tempo'] = 0;
        $_SESSION['melhor_volta'] = 0;
        $_SESSION['media'] = 0;
    }

    // Se não houver número de voltas, armazena na sessão
    if ($_POST && isset($_POST['num_voltas'])) {
        $_SESSION['num_voltas'] = $_POST['num_voltas'];
    }

    // Se houver algum tempo de volta, calcula
    if ($_POST && isset($_POST['volta_1'])) {
        $_SESSION['melhor_tempo'] = $_POST["volta_1"];
        $_SESSION['melhor_volta'] = $_POST["volta_1"];

        $media = 0;

        for ($i = 1; $i <= $_SESSION['num_voltas']; $i++) {
            $tempo = $_POST["volta_$i"];
            if ($tempo < $_SESSION['melhor_tempo']) {
                $_SESSION['melhor_tempo'] = $tempo;
                $_SESSION['melhor_volta'] = $i;
            }

            $media += $tempo;
        }

        $_SESSION['media'] = $media / $_SESSION['num_voltas'];
    }

    echo "<h2>Resultados</h2>";
    echo "<p>Número de voltas: " . $_SESSION['num_voltas'] . "</p>";
    echo "<p>Melhor tempo '" . $_SESSION['melhor_tempo'] . "' na volta '" . $_SESSION['melhor_volta'] . "'</p>";
    echo "<p>Tempo médio: " . $_SESSION['media'] . "</p>";
    ?>
</body>

</html>