<?php
/*declare(strict_types=1);
error_reporting(-1);*/

function bubblesort(array $arr)
{
    $count = count($arr);
    if ($count <= 1){
        return $arr;
    }
    $is_flag = false;
    $count_iter = 1;
    for ($i = 0; $i < $count; ++$i){
        $is_flag = false;
        for ($j = $count - 1; $j > $i; --$j){
            if ($arr[$j] < $arr[$j - 1]){
                $is_flag = true;
                $tmp = $arr [$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
                ++$count_iter;
            }
        }
        if (!$is_flag){
            echo 'цикл был запущен ' . $count_iter . ' раз' .PHP_EOL;
            return $arr;
        }
    }
    echo 'цикл был запущен ' . $count_iter . ' раз' .PHP_EOL;;
    return $arr;
}

$arr = [1, 10, -4, - 45, 101, 2, 56, 6, 10, -1000];
print_r(bubblesort($arr));

$arr_1 = [10, 10, 11, 10, 10];
print_r(bubblesort($arr_1));