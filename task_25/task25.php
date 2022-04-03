<?php

function getSortedNames($array)
{
    $values = [];

    foreach ($array as ['name' => $name]) {
        $values[] = $name;
    }

    sort($values);
    return $values;
}