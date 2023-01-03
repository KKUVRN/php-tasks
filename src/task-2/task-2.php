<?php


/**
 * Задание №1. Дано два числа 17 и 54. Найдите сумму 40% от первого числа
 * и 84% от второго числа.
 */
//Вариант №1
$a = 17;
$b = 54;
echo $a * 0.4 + $b * 0.84 .PHP_EOL ;

//Вариант №2
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


/**
 * Задание №4. Требуется проверить, содержит ли переменная числовое значение,
 * даже если она имеет строковый тип. пример:
 * [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']
 */
$array = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];
$equals = [];

for ($i = 0; $i < count($array); ++$i) {
    if (is_numeric($array[$i])) {
        $equals [$array[$i]] = 'YES';
    }
    else {
        $equals [$array[$i]] = 'NO';
    }
}

print_r($equals);

/**
 * Задание №5. На одной строчке через пробел записаны два целых числа:
 * длина и ширина прямоугольника. Вычислите его площадь и периметр (именно в таком порядке).
 * Результат выведите на разных строках. input 5 10 output 50 30
 */
$lineData = explode(" ", readline());
$area = $lineData[0] * $lineData[1];
$perimeter = 2 * $lineData[0] + 2 * $lineData[1];
echo $lineData[0] . " " . $lineData[1] .PHP_EOL;
echo $area . " " . $perimeter;

