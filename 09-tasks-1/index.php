<?php

/*
 * КРУГОВОРОТ ЭЛЕМЕНТОВ МАССИВА
 *
 * Напишите функцию, которая принимает массив элементов, берет первый элемент массива и перемещает его в конец массива, сдвигая прочие элементы на 1 позицию влево.
Исходный массив: $data = [1, 2, 3, 4, 5];
После работы функции: $data = [2, 3, 4, 5, 1];

Попробуйте добавить в функцию аргумент, который будет отвечать за количество перемещений. Продумайте, как можно оптимизировать алгоритм, если число перестановок больше или равно кол-ву элементов.
 */

$arr = [1, 2, 3, 4, 5];

//function circulation(array $arr, int $el_count = 3): array|null
//{
//    $cnt = count($arr);
//
//    if ($cnt <= 1) return $arr;
//
//    for ($i = 0; $i < $el_count; $i++) {
//        $arr[] = $arr[$i];
//        unset($arr[$i]);
//    }
//
//    return array_values($arr);
//}

function circulation(array $arr, int $el_count = 1): array
{
    $cnt = count($arr);

    if ($cnt <= 1) {
        return $arr;
    }

    if ($cnt == $el_count){
        return $arr;
    }

    if ($el_count > $cnt){
        $el_count -= $cnt;
    }

    for ($i = 0; $i < $el_count; $i++) {
        $el = array_shift($arr);
        $arr[] = $el;
    }
    return $arr;
}

print_r(circulation($arr, 6));