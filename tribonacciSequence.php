<?php
// day 10
// https://www.codewars.com/kata/556deca17c58da83c00002db/train/php

function tribonacci($signature, $n)
{
    if ($n <= 3) return array_slice($signature, 0, $n);

    for ($i = 3; $i < $n; $i++) {
        $signature[] = $signature[$i - 1] + $signature[$i - 2] + $signature[$i - 3];
    }

    return $signature;
}
