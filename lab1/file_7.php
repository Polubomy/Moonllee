<?php
    $boolVar = true;
    echo gettype($boolVar)."<br>";
    echo "Булево? " . (is_bool($boolVar) ? "Да" : "Нет") . "<br><br>";

    $intVar = 2;
    echo gettype($intVar)."<br>";
    echo "Целое число? " . (is_int($intVar) ? "Да" : "Нет") . "<br><br>";

    $floatVar = 1.2;
    echo gettype($floatVar)."<br>";
    echo "Число с плавающей точкой? " . (is_float($floatVar) ? "Да" : "Нет") . "<br><br>";

    $stringVar = "Привет, мир!";
    echo gettype($stringVar)."<br>";
    echo "Строка? " . (is_string($stringVar) ? "Да" : "Нет") . "<br><br>";

    $arrayVar = [1, 2, 3];
    echo gettype($arrayVar)."<br>";
    echo "Массив? " . (is_array($arrayVar) ? "Да" : "Нет") . "<br><br>";

    class Class1 {}
    $objVar = new Class1();
    echo gettype($objVar)."<br>";
    echo "Объект? " . (is_object($objVar) ? "Да" : "Нет") . "<br><br>";

    $file = fopen("file.txt", "w+");
    echo gettype($file)."<br>";
    echo "Ресурс? " . (is_resource($file) ? "Да" : "Нет") . "<br><br>";

    $nullVar = null;
    echo gettype($nullVar)."<br>";
    echo "NULL? " . (is_null($nullVar) ? "Да" : "Нет") . "<br><br>";
?>

