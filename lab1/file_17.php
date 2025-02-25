<?php
    $apples = 4;
    $fruitname = "apples";
    echo "Число яблок равно ", $$fruitname;
    echo "<br>";
    $oranges = 3;
    $fruitname = "oranges";
    echo "Число апельсинов равно ${$fruitname}";



    define("pi",3.14159265350);
    echo "<br>",pi;
    echo "<br>";
    define("CONSTANT", "Hello world.");
    echo CONSTANT; //выводит "Hello world."
    echo "<br>";
    echo Constant; //выводит "Constant" и уведомление.
    echo "<br>"

?>
