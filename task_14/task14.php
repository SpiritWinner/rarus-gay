<?php

function buildDefinitionList($array)
{
    $result = [];
    foreach ($array as $value) {
        $result[] = "<dt>{$value[0]}</dt><dd>{$value[1]}</dd>";
    }
    $innerValue = implode('', $result);
    return "<dl>{$innerValue}</dl>";
}