<?php
function debug(array $arr)
{
    echo '<pre>' . print_r($arr, 1) . '</pre>';
}

$arr = [15, 5, 1, 4, 3];

function quick_sort(array $arr)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = $arr[0];

    $left_arr = $right_arr = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivot) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);

    return array_merge($left_arr, [$pivot], $right_arr);
}

print_r(quick_sort($arr));