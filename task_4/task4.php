<?php

function swap(&$a, &$b)
{
    $a -= $b;
    $b = $a + $b;
    $a = -$a + $b;
}