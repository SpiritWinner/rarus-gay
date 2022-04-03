<?php

function Discriminant($a, $b, $c)
{
    $D = $b*$b - 4 * $a * $c;

    if ($D < 0) {
        echo 'Корней нет';
    }
    elseif ($D == 0)
    {
        $x = -$b/(2*$a);
        echo 'x = ' , $x;
    }
    else
    {
        $x1 = (-$b + sqrt($D)) /(2*$a);
        $x2 = (-$b - sqrt($D)) /(2*$a);
        echo 'x1 = ', $x1 ,', x2 = ' , $x2;
    }
}