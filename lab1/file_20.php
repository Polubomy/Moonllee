<?php
    $text = "      Самый текстовый текст из текстов    ";

    // trim - удаление пробелов с начала и конца строки
    $trimText = trim($text);
    echo "После trim: '$trimText' <br>";

    // strchr - поиск первого вхождения символа в строку
    $strchrT = strchr($trimText, "т");
    echo "Первое вхождение буквы 'т': '$strchrT' <br>";

    //nstrcmp - сравнение двух строк
    $str1 = "Привет";
    $str2 = "привет";
    $nstrcmpT = strcmp($str1, $str2);
    if ($nstrcmpT == 0) {
        echo "Строки '$str1' и '$str2' равны. <br>";
    } elseif ($nstrcmpT < 0) {
        echo "Строка '$str1' меньше строки '$str2'. <br>";
    } else {
        echo "Строка '$str1' больше строки '$str2'. <br>";
    }

    // strlen - длина строки
    $length = strlen($trimText);
    echo "Длина строки: $length <br>";

    // chr - преобразование числа в символ
    $char = chr(65);  // - это код для символа 'A'
    echo "Символ с кодом 65: '$char' <br>";

    // ord - преобразование символа в его код (обратный chr)
    $asciiCode = ord("A"); // Символ 'A' имеет код 65
    echo "Код символа 'A': $asciiCode <br>";
?>
