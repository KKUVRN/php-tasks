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
//Вариант №1
$number = 123;
echo $number[0] + $number[1] + $number [2];

//Вариант №2
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
//Вариант №1
$number = 456;
$number = strval($number);
$number[1] = '0';
settype($number, 'integer');
echo $number;
//Вариант №2
$number = 456;
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

/**
 * Задание №6. В переменных a = 3 и b = 4 лежат положительные длины катетов
 * прямоугольного треугольника. Вычислить и вывести на экран площадь треугольника и его периметр.
 */

$a = 3;
$b = 4;

echo 'Площадь треугольника = ' . $a * $b / 2 .PHP_EOL;
echo  'Периметр треугольника = ' . $a + $b + sqrt($a ** 2 + $b ** 2);

/**
 * Задание №7. Натуральное положительное число записано в переменную n = 414.
 * Определить и вывести на экран, сколько цифр в числе n.
 */

$n = 414;

echo 'В числе $n ' . strlen((string)$n) . ' числа';


