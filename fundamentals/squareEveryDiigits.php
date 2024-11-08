<?php

// Day 9 ex 2
// https://www.codewars.com/kata/546e2562b03326a88e000020/train/php
function square_digits($num): int
{
    $numstr = strval($num);

    $squareDigit = [];

    foreach (str_split($numstr) as $digit) {
        $squareDigit[] = strval($digit * $digit);
    }

    return implode('', $squareDigit);
}
