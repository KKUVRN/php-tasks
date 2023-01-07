<?php


/**
 * Задание №29. Дана строка 'php'. Сделайте из нее строку 'PHP'.
 */

$line = 'php';
$line = strtoupper($line);
echo $line;

/**
 * Задание №30. Дана строка 'PHP'. Сделайте из нее строку 'php'
 */

$line = 'PHP';
$line = strtolower($line);
echo $line;

/**
 * Задание №31. Дана строка 'london'. Сделайте из нее строку 'London'
 */

$line = 'london';
$line = ucfirst($line);
echo $line;

/**
 * Задание №32. Дана строка 'london'. Сделайте из нее строку 'London'
 */

$line = 'London';
$line = lcfirst($line);
echo $line;

/**
 * Задание №33. Дана строка 'london is the capital of great britain'.
 * Сделайте из нее строку 'London Is The Capital Of Great Britain'.
 */

$line = 'london is the capital of great britain';
$line = ucwords($line);
echo $line;

/**
 * Задание №34. Разбить предложение на слова 'PHP это распространённый язык программирования
 * общего назначения с открытым исходным кодом'
 */

$line = 'PHP это распространённый язык программирования общего назначения с открытым исходным кодом';
$word  = strtok($line, ' ');

$words = [];
while (!empty($word)) {
    $words[] = $word;
    $word = strtok(' ');
}
print_r($words);

/**
 * Задание №35. Вывод строки 'Hello world!' в обратном порядке
 */

$line = 'Hello world!';
echo strrev($line);
