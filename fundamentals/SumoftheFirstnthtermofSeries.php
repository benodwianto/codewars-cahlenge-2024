<?php
// Day 8
// https://www.codewars.com/kata/555eded1ad94b00403000071/train/php

function series_sum($n)
{
    if ($n == 0) {
        return '0.00';
    }

    $sum = 0;
    $denominator = 1;
    for ($i = 0; $i < $n; $i++) {
        $sum += 1 / $denominator;
        $denominator += 3;
    }
    return number_format($sum, 2, '.', '');
}
