<?php
    $Date = date('d.m.Y');
    $Time = date('h:i:s'); // время не по нашему часовому поясу и 12 часовой формат
    date_default_timezone_set('Europe/Moscow');
    $Time = date('H:i:s');


    echo "Текущая дата: $Date<br>";
    echo "Текущее время: $Time";
?>
