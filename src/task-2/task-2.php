<?php


/**
 * Задание №1. Дано два числа 17 и 54. Найдите сумму 40% от первого числа
 * и 84% от второго числа.
 */
function calPercent (float $number, float $percent): float
{
    return $number * ($percent / 100);
}

$a = 17;
$aPercent = 40;
$b = 54;
$bPrecent = 84;
echo calPercent($a, $aPercent) + calPercent($b, $bPrecent);

/**
 * Задание №2. Дано трехзначное число 123. Найдите сумму его цифр.
 */
$number = 123;
$count = 0;

while ($number / 10) {
    $count += $number % 10;
    $number /= 10;
}
echo $count;

/**
 * Задание №3. Дано трехзначное число 456. Поменяйте среднюю цифру на ноль.
 */
$number = 456;
/*$number = strval($number);
$number[1] = '0';
settype($number, 'integer'); первый вариант*/
settype($number, 'string');
$number[1] = '0';
settype($number, 'integer'); //второй вариант
echo $number;

