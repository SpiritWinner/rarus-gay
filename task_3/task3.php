<?php

function reverse (int $number)
{
    $resalt = 0;
    while (abs($number) > 0)
    {
        $resalt = $resalt * 10 + $number % 10;
        $number = (int)($number/10);
    }

    return $resalt;
}