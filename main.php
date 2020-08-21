<?php
echo "<h2>Массивы</h2>";
    $categories = [
        "Бытовая техника",
        "Сад и огород",
        "Спорт и красота",
        "Медицина"
    ];

    echo $categories[1];
    $categories[] = "Зоотовары";
    echo '<br>'. mb_strtolower(array_shift($categories));
    echo '<br>'. mb_strtoupper(array_pop($categories));
    echo '<br>';

    $dogHome = [
        "name" => "Guf",
        "age" => "1 year",
        "city" => "Kiev"
    ];


echo "<hr>";
echo "<h2>Функции</h2>";













echo "<hr>";





echo "<hr>";

