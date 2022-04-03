<?php

function get($array, $index, $default = null)
{
    if ((count($array) - 1) < $index || $index < 0) {
        return $default;
    }
    return $array[$index];
}
