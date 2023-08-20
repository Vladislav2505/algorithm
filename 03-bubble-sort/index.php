<?php

function debug(array $arr)
{
    echo '<pre>' . print_r($arr, 1) . '</pre>';
}

$arr = [15, 5, 1, 4, 3];

function bubble_sort($arr){
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $flag = false;
        echo 'Внешний массив' . "\n";
        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            echo 'Внутренний массив' . "\n";
            if ($arr[$j] > $arr[$j + 1]){
                list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1], $arr[$j]];
                $flag = true;
            }
        }
        if (!$flag) return $arr;
    }
    return $arr;
}

print_r(bubble_sort($arr));