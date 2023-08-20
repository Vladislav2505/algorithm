<?php

/*
 * НАТУРАЛЬНЫЕ ЧИСЛА ОТ 1 ДО N
 * Напишите функцию, которая выводит числа от 1 до N. При решении необходимо использовать рекурсию.
 */

function print_nums($n)
{
    if ($n == 1) {
        return $n;
    }

    return print_nums($n - 1) . ' ' . $n;
}

function print_nums2(int $a, int $b): int|string
{
    if ($a > $b) {
        if ($a == $b) {
            return $a;
        }
        return $a . ' ' . print_nums2($a - 1, $b);
    } else {
        if ($b == $a) {
            return $a;
        }
        return $a . ' ' . print_nums2($a + 1, $b);
    }
}


var_dump(print_nums2(5, 1));