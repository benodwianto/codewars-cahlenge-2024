<?php
//Day 6
// https://www.codewars.com/kata/57a429e253ba3381850000fb/train/php 

function bmi($weight, $height)
{
    $bmi = $weight / ($height * $height);
    if ($bmi <= 18.5) {
        return "Underweight";
    } elseif ($bmi <= 25) {
        return "Normal";
    } elseif ($bmi <= 30) {
        return "Overweight";
    }
    return "Obese";
}
