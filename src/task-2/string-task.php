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

/**
 * Задание №36. Преобразовать первый символ строки ('hello world!', 'привет мир!') в верхний регистр.
 */

$lineOne = 'hello world!';
$lineSecond = 'привет мир!';
$firstCharUp = mb_convert_case(mb_substr($lineSecond, 0,1), MB_CASE_UPPER);
$lineSecond = $firstCharUp . mb_substr($lineSecond, 1);
echo ucfirst($lineOne) .PHP_EOL;
echo $lineSecond;

/**
 * Задание №37. Замените в строке все вхождения 'word' на 'letter'.
 */

$line = 'word world hello first two word one second three word';
$searchValue = 'word';
$peplaceValue = 'letter';
$line = str_replace($searchValue, $peplaceValue, $line);
echo $line;

/**
 * Задание №38. Дана строка. Если ее длина больше 10, то оставить в строке только первые 6 символов,
 * иначе дополнить строку символами 'o' до длины 12
 */

//Первый вариант
$lineFirst = 'abcdefghijklm';
$lineSecond = 'abcdefg';
echo (strlen($lineFirst) > 10 ? substr($lineFirst, 0, 6) : $lineFirst . str_repeat('o', 12 - strlen($lineFirst))) .PHP_EOL;
echo (strlen($lineSecond) > 10 ? substr($lineSecond, 0, 6) : $lineSecond . str_repeat('o', 12 - strlen($lineSecond)));
die;
//Второй вариант
$lineFirst = 'abcdefghijklm';
$lineSecond = 'abcdefg';
echo editLine($lineFirst) .PHP_EOL;
var_dump(editLine($lineFirst));
echo editLine($lineSecond);
var_dump(editLine($lineSecond));

function editLine (string $line): string {
    if (strlen($line) > 10) {
        return substr($line, 0, 6);
    } else {
        return $line . str_repeat('o', 12 - strlen($line));
    }
}

/**
 * Задание №39. Дана строка. Если она начинается на 'abc',
 * то заменить их на 'www', иначе добавить в конец строки 'zzz'
 */

$lineFirst = 'abcdefg';
$lineSecond = 'avcdefg';
$searchValue = 'abc';
$replaceValue = 'www';
$addValue = 'zzz';

echo (str_starts_with(strtolower($lineFirst), $searchValue) ?
        str_replace($searchValue, $replaceValue, $lineFirst)
            : $lineFirst . $addValue) .PHP_EOL;
echo (str_starts_with(strtolower($lineSecond), $searchValue) ?
        str_replace($searchValue, $replaceValue, $lineSecond)
            : $lineSecond . $addValue);

/**
 * Задание №40. Дана строка string = a1b2c3d4i5fg67, найти количество цифр.
 */

$line = 'a1b2c3d4i5fg67';

$is_Flag = false;
$count = 0;
for ($i = 0; $i < strlen($line); ++$i) {
    if (is_numeric($line[$i])) {
        ++$count;
        $is_Flag = true;
    }
}

if ($is_Flag) {
    echo 'Кол-во цифр - ' . $count;
} else {
    echo 'Строка не содержит цифр';
}