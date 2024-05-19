<?php

function isFirstStringLarger(string $s1, string $s2): bool{
    $s1 = strtolower($s1);
    $s2 = strtolower($s2);

    $sum1 = 0;
    $sum2 = 0;
    
    for ($i = 0; $i < strlen($s1); $i++) {
        $sum1 += ord($s1[$i]);
    }

    for ($i = 0; $i < strlen($s2); $i++) {
        $sum2 += ord($s2[$i]);
    }

    return $sum1 > $sum2;
}

