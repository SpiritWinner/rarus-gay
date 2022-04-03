<?php

function addPrefix($array, $prefix)
{
    $result = [];
    for ($i = 0; $i < (count($array)); $i++) {
        $result[] = "{$prefix} {$array[$i]}";
    }
    return $result;
}
