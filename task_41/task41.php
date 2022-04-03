<?php

function getDifference($array1, $array2)
{
    $filtered = array_filter($array1, function ($element1) use ($array2) {
        return !in_array($element1, $array2);
    });
    return array_values($filtered);
}