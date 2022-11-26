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
 * символ 'h', символ 'e', символ 'o'.
 */
$hello = 'hello';

echo "$hello[0], $hello[1], $hello[4] ";

/**
 * Создайте переменную $a присвойте значение 10,
 * выведите на экран значение, найдите функцию удаление переменной,
 * удалите переменную $a, и опять выведите ее значение на экран.
 */
$a = 10;
unset($a);

echo "$a";
var_dump($a);

/**
 * Создайте переменные $a, $b, $c. Присвойте переменной $a значение 3,
 * присвойте значение переменной $a по ссылке переменной $b
 * и прибавьте к значению переменной $b 5, и присвойте значение $b
 * по ссылке переменой $c, выведите на экран значение переменных $a, $b, $c
 * и удалите переменную $a, выведите на экран значение переменных $a, $b, $c
 */
$a;
$b;
$c;
$a = 3;
$b = &$a;
$b += 5;
$c = &$b;

echo "a = $a, b = $b; c = $c";

unset($a);

echo "a = $a, b = $b; c = $c";

/**
 * Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
 * Выведите значение этой переменной на экран.
 */

$text = 'Привет, Мир!';

echo $text;

/**
 * Создайте переменные $text1='Привет, ' и $text2='Мир!'.
 * С помощью этих переменных и операции сложения строк выведите
 * на экран фразу 'Привет, Мир!'.
 */

$text1 = 'Привет,';
$text2 = 'Мир!';

echo "$text1" . " " . "$text2" . PHP_EOL;
echo $text1 . " " . $text2 . PHP_EOL;
echo "{$text1}" . " " . "{$text2}";

/**
 * Создайте переменную $name и присвойте ей ваше имя.
 * Выведите на экран фразу 'Привет, %Имя%!'.
 * Вместо %Имя% должно стоять ваше имя.
 */

$name = 'Константин';
$result = "Привет," . " " . $name . "!";

echo $result;

/**
 * Создайте переменную $age и присвойте ей ваш возраст.
 * Выведите на экран 'Мне %Возраст% лет!'.
 */

$age = 36;

echo "Мне {$age} лет!";
