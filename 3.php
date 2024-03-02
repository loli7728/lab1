<?php

$a1 = readline("Введите a1: ");
$b1 = readline("Введите b1: ");
$a2 = readline("Введите a2: ");
$b2 = readline("Введите b2: ");
if ($a1 > $b1){
    $x = $a1;
    $a1 = $b1;
    $b1 = $x;
}
if ($a2 > $b2){
    $x = $a2;
    $a2 = $b2;
    $b2 = $x;
}

if ($a2 > $b1 || $a1 > $b2) {
    echo "Пересечение отсутсвует";
    exit;
} elseif ($b1 == $a2) {
    echo "Пересечение: точка $b1";
    exit;
} elseif ($b2 == $a1) {
    echo "Пересечение: точка $b2";
    exit;
} else {
    $start = max($a1, $a2);
    $end = min($b1, $b2);
    echo "пересечение отрезков: [$start; $end]";
    exit;
}
