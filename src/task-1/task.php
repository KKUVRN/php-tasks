<?php

/**
 * Создайте переменную $a и присвойте ей значение 3.
 * Выведите значение этой переменной на экран
 */
$a = 3;
echo $a;

/**
 * Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность,
 * произведение и частное (результат деления)
 */
$a = 10;
$b = 2;
echo $a + $b . PHP_EOL;
echo $a - $b . PHP_EOL;
echo $a * $b . PHP_EOL;
echo $a / $b;

/**
 * Создайте переменные $a=10, $b=2 и $c=5.
 * Выведите на экран их сумму
 */
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;

/**
 * Создайте переменные $a=10, $b=2 и $c=5.
 * Выведите на экран их сумму
 */
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;

/**
 * Требуется составить программу, после выполнения
 * которой переменная b будет иметь значение переменной а,
 * переменная с — значение переменной b, а переменная
 * а — значение переменной с.
 * Дополнительные переменные не применять.
 * $a = 10 -> $a = 5
 * $b = 2 -> $b = 10
 * $c = 5 -> $c = 2
 */
$a = 10;
$b = 2;
$c = 5;
$a = $a + $b + $c;// 10 + 2 + 5 = 17
$b = $a - $c - $b;// 17 - 5 - 2 = 10
$c = $a - $b - $c;// 17 - 10 - 5 = 2
$a = $a - $b - $c;// 17 - 10 - 2 = 5
echo "{$a}, {$b}, {$c}";

/**
 * Написать небольшую программу, где создаются
 * переменные всех простых типов,
 * и далее их значения выводятся на экран
 */
$a = true;
$b = 10;
$c = 11.1;
$d = 'Привет';

echo "{$a}, {$b}, {$c}, {$d}";

/**
 * Написать программу устанавливающую типы переменных.
 */
$a = ' ';
$b = '10';
$c = 11.1;
$d = 'Привет';
settype($a, "bool");
settype($b, "float");
settype($c, "integer");
settype($d,"integer");

echo "{$a},{$b},{$c},{$d}";

/**
 * Написать программу выводящую типы переменных.
 */
$a = ' ';
$b = '10';
$c = 11.1;
$d = 'Привет';

echo gettype($a) .PHP_EOL, gettype($b) .PHP_EOL, gettype($c) .PHP_EOL, gettype($d);

/**
 * Создайте переменные $a=17 и $b=10.
 * Отнимите от $a переменную $b и результат присвойте переменной $c.
 * Затем создайте переменную $d, присвойте ей значение 7.
 * Сложите переменные $c и $d, а результат запишите в переменную $result.
 * Выведите на экран значение переменной $result.

 */
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result;

/**
 * Создайте переменную $hello и присвойте ей значение 'hello'.
 * Обращаясь к отдельным символам этой строки выведите на экран
 * символ 'h', символ 'e', символ 'o'

 */
$hello = 'hello';

echo "$hello[0], $hello[1], $hello[4] ";