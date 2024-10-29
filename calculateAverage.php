<!-- Day 5 -->
<!-- https://www.codewars.com/kata/57a2013acf1fa5bfc4000921/train/php -->

<?php
// Write a function which calculates the average of the numbers in a given array.

function find_average($array): float
{
    return (empty($array)) ? 0 : array_sum($array) / count($array);
}
?>