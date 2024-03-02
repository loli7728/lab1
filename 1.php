<?php

$numb1 = readline("Введите первое число: ");
$numb2 = readline("Введите второе число: ");
$operate = readline("Введите операцию (+,-,*,/): ");
$otvet = 0;

switch ($operate) {
    case '+':
        $otvet = $numb1 + $numb2;
        break;
    case '-':
        $otvet = $numb1 - $numb2;
        break;
    case '*':
        $otvet = $numb1 * $numb2;
        break;
    case '/':
        if ($numb2 !== 0) {
            $otvet = $numb1 / $numb2;
            break;
        } else {
            echo "На 0 делить нельзя";
            exit;
        }
    default:
        echo "Неверная оперция";
        exit;
}
echo "Ответ: $otvet";
