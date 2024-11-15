<?php
// Day 13
// https://www.codewars.com/kata/578aa45ee9fd15ff4600090d/train/php

function sortArray(array $arr): array
{
    $odds = array_filter($arr, fn($x) => $x % 2 !== 0);
    sort($odds);

    // Replace the odd numbers in the original positions
    $index = 0;
    foreach ($arr as &$num) {
        if ($num % 2 !== 0) {
            $num = $odds[$index];
            $index++;
        }
    }

    return $arr;
}
