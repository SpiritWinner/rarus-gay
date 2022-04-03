<?php

function isContinuousSequence($array)
{
    if (empty($array)) {
        return false;
    }

    for ($i = 1; $i < count($array) - 2; $i++) {
        if ($array[$i] - $array[$i - 1] !== 1 || $array[$i] - $array[$i + 1] !== -1) {
            return false;
        }
    }
    return true;
}