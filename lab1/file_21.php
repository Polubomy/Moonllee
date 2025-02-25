<?php
    $x = "2"; //x это строка
    var_dump($x); echo "<br>";
    $x += 2; // x тeперь целое число (4)
    var_dump($x); echo "<br>";
    $x = $x + 1.1221; // x теперь число с плавающей точкой (5.1221)
    var_dump($x); echo "<br>";
    $x = 5 + "10"; // x это целое число (15)
    var_dump($x); echo "<br>";
    $x = "10" + 5; // x это целое число (15)
    var_dump($x); echo "<br>";

    $x = 10; // X это целое число
    var_dump($x); echo "<br>";
    $x = (boolean) $x; // x это булев тип
    var_dump($x); echo "<br>";
?>