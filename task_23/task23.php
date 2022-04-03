<?php

function pick(array $data, array $keys)
{
    $result = [];
    foreach ($data as $key => $value) {
        if (in_array($key, $keys)) {
            $result[$key] = $value;
        }
    }

    return $result;
}
