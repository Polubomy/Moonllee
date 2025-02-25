<?php
    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;}
        else {
            return $n * factorial($n - 1);}}

    $n = 5;
    echo "Факториал числа $n: " . factorial($n);

?>