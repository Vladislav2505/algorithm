<?php

function debug(array $arr)
{
    echo '<pre>' . print_r($arr, 1) . '</pre>';
}

$arr = [15, 5, 1, 4, 3];

function selection_sort(array $arr): array
{
    $cnt = count($arr);

    if ($cnt <= 1){
        return $arr;
    }

    for ($i = 0; $i < $cnt; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $cnt; $j++) {
            if ($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        list($arr[$i], $arr[$min]) = [$arr[$min], $arr[$i]];
    }

    return $arr;
}

print_r(selection_sort($arr));