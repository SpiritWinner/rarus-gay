<?php

function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $hashedKey = crc32($key) % 1000;
    if (array_key_exists($hashedKey, $map)) {
        return false;
    } else {
        $map[$hashedKey] = $value;
        return true;
    }
}

function get($map, $key, $default = null)
{
    $hashedKey = crc32($key) % 1000;
    if (array_key_exists($hashedKey, $map)) {
        return $map[$hashedKey];
    } else {
        return $default;
    }
}
