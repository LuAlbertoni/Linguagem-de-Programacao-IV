<!-- Escreva um programa para validar um lote de cheques (Observação para a Geração Z: Cheque é um pedacinho de papel com um valor escrito e uma assinatura que vale como dinheiro. É tipo um pix de papel). O programa deverá inicialmente solicitar a soma do lote e o a quantidade de cheques desse lote. A seguir deverá ler o valor de cada cheque, calculando a soma total. Após a digitação de todos os cheques, o programa deverá imprimir as seguintes mensagens:
LOTE OK! (Se a soma informada for igual a soma calculada)
DIFERENÇA! (Se a soma calculada for diferente da soma informada) -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
</head>

<body>
    <form method="POST" action="ex02.php">
        <?php
        // Soma do lote
        if (!isset($_POST['soma_lote'])) {
            echo "<label for='soma_lote'>Soma do lote:</label>";
            echo "<input type='number' name='soma_lote' id='soma_lote' required><br>";
            echo "<label for='quantidade_cheques'>Quantidade de cheques:</label>";
            echo "<input type='number' name='quantidade_cheques' id='quantidade_cheques' required><br>";
        }

        // Valores dos cheques
        if (isset($_POST['quantidade_cheques'])) {
            $quantidadeCheques = $_POST['quantidade_cheques'];

            for ($i = 1; $i <= $quantidadeCheques; $i++) {
                echo "<label for='cheque_$i'>Valor do cheque $i:</label>";
                echo "<input type='number' name='cheque_$i' id='cheque_$i' required><br>";
            }
        }
        ?>

        <input type="submit" value="Validar">
    </form>

    <?php
    session_start();

    // Se não houver sessão, cria
    if (!isset($_SESSION['soma_lote'])) {
        $_SESSION['soma_lote'] = 0;
        $_SESSION['quantidade_cheques'] = 0;
    }

    // Armazena a soma do lote e a quantidade de cheques
    if ($_POST && isset($_POST['soma_lote'])) {
        $_SESSION['soma_lote'] = $_POST['soma_lote'];
        $_SESSION['quantidade_cheques'] = $_POST['quantidade_cheques'];
    }

    // Parte que realiza a validação
    if ($_POST && isset($_POST['cheque_1'])) {
        $_SESSION['soma_calculada'] = 0;

        for ($i = 1; $i <= $_SESSION['quantidade_cheques']; $i++) {
            $_SESSION['soma_calculada'] += $_POST["cheque_$i"];
        }

        if ($_SESSION['soma_lote'] == $_SESSION['soma_calculada']) {
            echo "<p>LOTE OK!</p>";
        } else {
            echo "<p>DIFERENÇA!</p>";
        }
    }
    ?>
</body>

</html>