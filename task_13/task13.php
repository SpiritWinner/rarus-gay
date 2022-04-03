<?php

function getIndexOfWarmestDay($array)
{
    if (empty($array)) {
        return null;
    }
    $max = max($array[0]);
    $maxKey = 0;
    foreach ($array as $key => $value) {
        if (max($value) > $max) {
            $max = $value;
            $maxKey = $key;
        }
    }
    return $maxKey;
}