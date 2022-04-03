<?php

function makeCensored($text, $stop)
{
    $words = explode(' ', $text);
    $result = [];
    for ($i = 0; $i < (count($words)); $i++) {
        if (in_array($words[$i], $stop)) {
            $result[] = "$#%!";
        } else {
            $result[] = "$words[$i]";
        }
    }
    return implode(' ', $result);
}
