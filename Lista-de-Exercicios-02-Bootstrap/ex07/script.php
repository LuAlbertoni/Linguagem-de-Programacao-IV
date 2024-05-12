<?php
require_once "../header.php";

echo "<p>" . $_POST['metros'] . " metros equivalem a " . converterMetrosParaCentimetros($_POST['metros']) . " centímetros";

require_once "../footer.php";
