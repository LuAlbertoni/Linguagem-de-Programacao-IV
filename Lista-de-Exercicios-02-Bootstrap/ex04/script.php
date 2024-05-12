<?php
require_once "../header.php";

foreach (gerarTabuada($_POST['val1']) as $result) {
    echo "<p>" . $result . "</p>";
}

require_once "../footer.php";
