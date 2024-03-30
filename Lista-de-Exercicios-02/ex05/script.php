<?php
$num = $_POST['num'];
$fat = 1;

for ($i = $num; $i > 0; $i--) {
    $fat *= $i;
}

echo "O fatorial de $num é $fat";
