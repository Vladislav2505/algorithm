<?php

function debug(array $arr)
{
    echo '<pre>' . print_r($arr, 1) . '</pre>';
}

$arr = [15, 5, 1, 4, 3];

function insert_sort(array $arr)
{
    $cnt = count($arr);

    if ($cnt <= 1){
        return $arr;
    }

    for ($i = 1; $i < $cnt; $i++) {
        $curr_item = $arr[$i];
        $prev_index = $i - 1;

        while(isset($arr[$prev_index]) && $arr[$prev_index] > $curr_item){
            $arr[$prev_index + 1] = $arr[$prev_index];
            $arr[$prev_index] = $curr_item;
            $prev_index--;
        }
    }

    return $arr;
}

print_r(insert_sort($arr));