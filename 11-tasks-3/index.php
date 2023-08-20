<?php

/*
 * СЛОЖЕНИЕ БОЛЬШИХ ЧИСЕЛ
 * Напишите функцию, которая умеет складывать целые положительные числа, бОльшие размера типа integer. На выходе функция должна возвращать целое цисло.
 * $num1 = 11111111111111111111;
 * $num2 = 22222222222222222222;
 *  $res = 33333333333333333333;
 * https://www.php.net/manual/ru/language.types.integer.php
 */

$str1 = '9111111111111111111119';
$str2 = '3222222222222222222222';

function bug_num_sum(string $str1, string $str2): string
{
    $strlen1 = strlen($str1);
    $strlen2 = strlen($str2);

    if ($strlen1 > $strlen2) {
        $str2 = str_pad($str2, $strlen1, '0', STR_PAD_LEFT);
    }
    if ($strlen2 > $strlen1){
        $str1 = str_pad($str1, $strlen2, '0', STR_PAD_LEFT);
    }

    $result = '';
    $sub = 0;

    for ($i = $strlen1 - 1; $i >= 0; $i--) {
        $sum = $str1[$i] + $str2[$i];
        $result .= ($sum + $sub) % 10;

        if ($sum + $sub > 9) {
            $sub = 1;
        } else {
            $sub = 0;
        }
    }

    if ($sub) {
        $result .= $sub;
    }
    return strrev($result);
}

var_dump(bug_num_sum($str1, $str2));