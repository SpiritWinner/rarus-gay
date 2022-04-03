<?php

function getIn($array, $keytoFind)
{
    $current = $array;
    foreach ($keytoFind as $value) {
        if (!is_array($current) || !array_key_exists($value, $current)) {
            return null;
        }
        if (array_key_exists($value, $current)) {
            $current = $current[$value];
        }
    }
    return $current;
}
