<?php
// https://www.codewars.com/kata/54d7660d2daf68c619000d95/train/php
// day 14

function gcd($a, $b)
{
    // Fungsi untuk menghitung GCD (Greatest Common Divisor) menggunakan algoritma Euclid
    return $b == 0 ? $a : gcd($b, $a % $b);
}

function lcm($a, $b)
{
    // Fungsi untuk menghitung LCM (Least Common Multiple)
    return ($a * $b) / gcd($a, $b);
}

function convertFrac($lst)
{
    if (empty($lst)) {
        return ""; // Jika input kosong, kembalikan string kosong
    }

    // Step 1: Cari penyebut umum terkecil (LCM) dari semua penyebut
    $denominators = array_column($lst, 1);
    $commonDenominator = array_reduce($denominators, 'lcm');

    // Step 2: Sesuaikan pembilang berdasarkan penyebut umum
    $result = array_map(function ($fraction) use ($commonDenominator) {
        $numerator = $fraction[0] * ($commonDenominator / $fraction[1]);
        return "($numerator,$commonDenominator)";
    }, $lst);

    // Step 3: Gabungkan hasil menjadi satu string
    return implode("", $result);
}

// Contoh Penggunaan
$input = [[1, 2], [1, 3], [1, 4]];
$output = convertFrac($input);
echo $output; // Output: (6,12)(4,12)(3,12)
