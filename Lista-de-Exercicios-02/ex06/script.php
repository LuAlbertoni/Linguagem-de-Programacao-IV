<?php
$a = $_POST['a'];
$b = $_POST['b'];

if ($a == $b) {
    echo "Números iguais: $a";
} else {
    if ($a < $b) {
        echo "$a $b";
    } else {
        echo "$b $a";
    }
}
