<?php
// Day 12
// https://www.codewars.com/kata/52597aa56021e91c93000cb0/train/php

function moveZeros(array $items): array
{
    $nonZeros = array_filter($items, fn($x) => $x !== 0 && $x !== 0.0);

    $zeroCount = count($items) - count($nonZeros);

    $zeros = array_fill(0, $zeroCount, (int)0);

    return array_merge($nonZeros, $zeros);
}
