<?php
    $Large_number = 2147483647;
    var_dump($Large_number);echo "<br>";
    //вывод: int (2147483647)
    $Large_number = 2147483648;
    var_dump($Large_number);echo "<br>";
    //вывод: float (2147483648)
    //это справедливо и для шестнадцатеричных целых:
    var_dump(0x80000000); echo "<br>";
    //вывод: float (2147483648)
    $Million = 1000000;
    $Large_number = 50000 * $Million;
    var_dump($Large_number);echo "<br>";
    //вывод: float(50000000000)


    $bool = TRUE; // логический
    $str = "foo"; // строковый
    $int = 12; //целочисленный
    echo gettype($bool);echo "<br>"; // выводит "boolean"
    echo gettype($str);echo "<br>"; // выводит "string"
    // Если это целое, увеличить на четыре
    if (is_int($int)) {
        $int += 4;
        echo "Число: $int";}
    // Если Sbool - это строка, вывести ее, иначе ничего не выводит
    if (is_string($bool)) {
        echo "Строка: $bool";}


    $foo = "5bar"; //string
    if(gettype($foo) == "string")
        echo 'Сейчас тип $foo - строковый и $foo='."$foo";
        echo "<br>";
    settype($foo, "integer"); // $foo is now 5 (integer)
    if(gettype($foo) == "integer")
        echo 'После преобразования тип $foo - целый и $foo ='."$foo";
        echo "<br>";
    echo 'Работа с переменной $bar';
    echo "<br>";

    $bar = true; echo "<br>"; //boolean 2025 Защ
    if(gettype($bar) == "boolean")
        echo 'Сейчас тип $bar - логический и $bar='."$bar","- то есть ИСТИНА";;
        echo "<br>";
    settype($bar, "float"); //тип Sbar тenерь равен "float"
    echo 'После преобразования тип $bar=';
    echo(gettype($bar).", то есть вещественный".' и $bar='."$bar");
    echo "<br>";

    settype($bar, "double"); // тип $bar теперь равен "double"
    echo 'После преобразования тип $bar=';
    echo(gettype($bar).",то есть тоже вещественный".' и $bar='."$bar");
    echo "<br>".

    settype($bar, "string"); //тип $bar тenерь "string"
    echo 'После преобразования тип $bar= ';
    echo(gettype($bar).", то есть строковый".' и $bar='."$bar");
    echo "<br>";


    settype($bar, "integer");// $bar is now "string"
    echo 'После преобразования тип $bar=';
    echo(gettype($bar).",то есть целый".' и $bar='."$bar");
    echo "<br>";
?>