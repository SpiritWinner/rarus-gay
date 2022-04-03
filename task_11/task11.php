<?php

function findIndex($arr, $element)
{
    foreach ($arr as $key => $item) {
        if ($element == $item) {
            return $key;
        }
    }

    return -1;
}
