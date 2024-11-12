<?php
// Day 11
// https://www.codewars.com/kata/56a5d994ac971f1ac500003e/train/php

function longestConsec($strarr, $k)
{

    $n = count($strarr);
    if ($n == 0 || $k > $n || $k <= 0) return "";

    return array_reduce(
        range(0, $n - $k),
        function ($longest, $i) use ($strarr, $k) {
            $concat = implode("", array_slice($strarr, $i, $k));
            return strlen($concat) > strlen($longest) ? $concat : $longest;
        },
        ""
    );
}
