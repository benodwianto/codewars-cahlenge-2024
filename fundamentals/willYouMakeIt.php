<?php
// Day 7
// https://codewars.com/kata/5861d28f124b35723e00005e/train/php

function zeroFuel($distanceToPump, $mpg, $fuelLeft)
{
    return $mpg * $fuelLeft >= $distanceToPump;
}
