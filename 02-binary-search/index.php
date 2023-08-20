<?php

$nums = range(1, 1000000);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function binary_search($arr, $item, $start = 0, $final = null)
{
    if ($final === null){
        $final = count($arr) - 1;
    }
    if ($start > $final){
        return false;
    }

    $half = (int) (($start + $final) / 2);

    if ($arr[$half] !== $item){
        if ($arr[$half] < $item){
            $start = $half + 1;
        } else {
            $final = $half - 1;
        }
        return binary_search($arr, $item, $start, $final);
    }
    return $half;
}

$res = binary_search($nums, 734543);

var_dump($res);