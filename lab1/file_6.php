<?php
    $boolVar = true;
    echo gettype($boolVar)."<br>";

    $intVar = 2;
    echo gettype($intVar)."<br>";

    $floatVar = 1.2;
    echo gettype($floatVar)."<br>";

    $stringVar = "Привет, мир!";
    echo gettype($stringVar)."<br>";

    $arrayVar = [1, 2, 3];
    echo gettype($arrayVar)."<br>";

    class Class1 {}
    $objVar = new Class1();
    echo gettype($objVar)."<br>";

    $file = fopen("file.txt", "w+");
    echo gettype($file)."<br>";

    $nullVar = null;
    echo gettype($nullVar)."<br>";
?>