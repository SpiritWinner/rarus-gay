<?php

function wordsCount($str)
{
    $exploded = explode(' ', $str);
    $result = [];
    foreach ($exploded as $value) {
        if (empty($value)) {
            continue;
        } elseif (!array_key_exists($value, $result)) {
            $result[$value] = 1;
        } else {
            $result[$value]++;
        }
    }
    return $result;
}