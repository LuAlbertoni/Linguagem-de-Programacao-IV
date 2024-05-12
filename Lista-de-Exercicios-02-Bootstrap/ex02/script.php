<?php
require_once "../header.php";

$result = encontrarMenor(array(
    $_POST['val1'],
    $_POST['val2'],
    $_POST['val3'],
    $_POST['val4'],
    $_POST['val5'],
    $_POST['val6'],
    $_POST['val7']
));

echo "<p>O menor valor é " . $result['val'] . " e está na posição " . $result['pos'] . "</p>";

require_once "../footer.php";
