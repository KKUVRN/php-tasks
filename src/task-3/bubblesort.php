<?php
/*declare(strict_types=1);
error_reporting(-1);*/

function bubbelSort(array $arr)
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    for ($i = 0; $i < $count; ++$i) {
        for ($j = ($count - 1); $j > $i; --$j) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
    }

    return $arr;
}

$arr = [1, -10, -4, - 45, 101, 2, 56, 6, 10, -1000];
print_r(bubbelSort($arr));

$arr_1 = [10, 10, 11, 10, 10];
print_r(bubbelSort($arr_1));