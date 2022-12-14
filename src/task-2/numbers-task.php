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
//Первый вариант
$a = 3;
$b = 4;

echo 'Площадь треугольника = ' . $a * $b / 2 .PHP_EOL;
echo  'Периметр треугольника = ' . $a + $b + sqrt($a ** 2 + $b ** 2);
//Второй вариант
$a = 3;
$b = 4;

echo 'Площадь треугольника = ' . $a * $b / 2 .PHP_EOL;
echo  'Периметр треугольника = ' . $a + $b + hypot($a, $b);

/**
 * Задание №7. Натуральное положительное число записано в переменную n = 414.
 * Определить и вывести на экран, сколько цифр в числе n.
 */

$n = 414;

echo 'В числе $n ' . strlen((string)$n) . ' числа';

/**
 * Задание №8. Создать программу, выводящую на экран случайно сгенерированное
 * трёхзначное натуральное число и его наибольшую цифру.
 * Примеры работы программы:
 * В числе 208 наибольшая цифра 8
 * В числе 774 наибольшая цифра 7
 * В числе 613 наибольшая цифра 6
 */
//Первый вариант
$number = (string)rand(100, 999);
echo 'Случайное число ' . $number . PHP_EOL;
echo 'Наибольшая цифра числа ' . $number . ' - ' . max((int)max($number[0],$number[1]), $number[2]) . PHP_EOL;
//Второй вариант
$number = (string)rand(100, 999);
echo 'Случайное число ' . $number . PHP_EOL;
echo 'Наибольшая цифра числа ' . $number . ' - ' . max(str_split($number, 1));

/**
 * Задание №9. Сформировать число, представляющее собой реверсную (обратную в порядке следования разрядов)
 * запись заданного трехзначного числа. Например, для числа 341 таким будет 143.
 */
//Первый вариант
$number = rand(0, 999);
echo 'Трехзначное число ' . $number . PHP_EOL;
$number = (int)strrev((string)$number);
echo 'Реверс числа  - ' . $number;

/**
 * Задание №10. Дано четырехзначное число. Проверить, является ли оно палиндромом. 1441, 5555, 7117
 */

$number = 7117;
$number = (string)$number;

if (substr($number, 0, 2) === strrev(substr($number, 2, 2))) {
    echo 'Число полиндром!';
} else {
    echo 'Число не полиндром!';
}

/**
 * Задание №11. Дано четырехзначное число 1322. Проверить, является ли оно «счастливым билетом».
 */

$number = 1422;
$number = (string)$number;

if ($number[0] + $number[1] === $number[2] + $number[3]) {
    echo 'Счастливый билет!';
} else {
    echo 'Не счастливый билет!';
}