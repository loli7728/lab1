<?php

$color1 = readline("Введите первый цвет: ");
$color2 = readline("Введите второй цвет: ");

if ($color1 === $color2) {
    echo $color1;
    exit;
}
if (($color1 == "красный" && $color2 == "синий") || ($color2 == "красный" && $color1 == "синий")) {
    echo "фиолетовый";
    exit;
} elseif (($color1 == "красный" && $color2 == "жёлтый") || ($color2 == "красный" && $color1 == "жёлтый")) {
    echo "оранжевый";
    exit;
} elseif (($color1 == "синий" && $color2 == "жёлтый") || ($color2 == "синий" && $color1 == "жёлтый")) {
    echo "зелёный";
    exit;
} else {
    echo "Неверные цвета";
    exit;
}
