<?php

function checkIfBalanced($string) :bool
{
    $len = strlen($string);
    $stack = [];

    for ($i = 0; $i < $len; $i++) {
        $simbol = substr($string, $i, 1);
        if ($simbol === '(') {
            $stack[] = $simbol;
        } elseif ($simbol === ')') {
            if (!$last = array_pop($stack))
                return false;
            if ($simbol === ')' && $last !== '(') {
                return false;
            }
        }
    }
    return count($stack) === 0;
}
