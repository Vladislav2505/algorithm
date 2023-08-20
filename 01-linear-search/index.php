<?php

$nums = range(1, 1000000);

function linear_search(array $arr, int $nums): int|bool
{
    foreach ($arr as $key => $item){
        if ($nums === $item) return $key;
    }
    return false;
}

$start = microtime(true);

//var_dump(linear_search($nums, 1000000));
var_dump(array_search(1000000, $nums));

$time = round(microtime(true) - $start, 6);
echo $time;