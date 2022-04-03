<?php

function swap($array, $index)
{
    if (!array_key_exists($index + 1, $array) || !array_key_exists($index - 1, $array)) {
        return $array;
    }
    for ($i = 0; $i < (count($array)); $i++) {
        $temp = $array[$index - 1];
        $array[$index - 1] = $array[$index + 1];
        $array[$index + 1] = $temp;
    }
    return $array;
}
